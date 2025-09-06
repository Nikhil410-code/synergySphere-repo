<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Project Menu</h2>
      <ul>
        <li onclick="showPage('dashboard')">🏠 Dashboard</li>
        <li onclick="showPage('addTask')">➕ Add Task</li>
        <li onclick="showPage('addMember')">👥 Add Members</li>
        <li onclick="showPage('viewTasks')">📋 View Tasks</li>
        <li onclick="showPage('editTask')">✏️ Edit Task</li>
      </ul>
    </aside>

    <!-- Main content -->
    <main class="content" id="mainContent">
      <!-- Dynamic pages will be injected here -->
    </main>
  </div>

  <script>
    const API_BASE = "http://localhost:5000"; // Change to your backend

    const pages = {
      dashboard: `
        <section class="section">
          <h2>Welcome to Project Dashboard</h2>
          <p>Select an option from the sidebar to get started.</p>
        </section>
      `,
      addTask: `
        <section class="section">
          <h2>Add Task</h2>
          <form id="taskForm">
            <input type="text" name="name" placeholder="Task Name" required>
            <input type="text" name="tags" placeholder="Tags (comma separated)">
            <input type="date" name="deadline">
            <select name="priority">
              <option>Low</option>
              <option>Medium</option>
              <option>High</option>
            </select>
            <select name="assignee" id="assigneeDropdown" required>
              <option value="">-- Select Member --</option>
            </select>
            <select name="role" required>
              <option value="">-- Select Role --</option>
              <option value="Developer">Developer</option>
              <option value="Tester">Tester</option>
              <option value="Designer">Designer</option>
              <option value="Manager">Manager</option>
            </select>
            <textarea name="description" placeholder="Description"></textarea>
            <button type="submit">Add Task</button>
          </form>
        </section>
      `,
      addMember: `
        <section class="section">
          <h2>Add Member to Project</h2>
          <form id="memberForm">
            <input type="text" name="name" placeholder="Member Name" required>
            <input type="email" name="email" placeholder="Member Email" required>
            <select name="role" required>
              <option value="">-- Select Role --</option>
              <option value="Developer">Developer</option>
              <option value="Tester">Tester</option>
              <option value="Designer">Designer</option>
              <option value="Manager">Manager</option>
            </select>
            <button type="submit">Add Member</button>
          </form>
          <h3>Current Members</h3>
          <ul id="memberList"></ul>
        </section>
      `,
      viewTasks: `
        <section class="section">
          <h2>Assigned Tasks</h2>
          <table id="taskTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Assignee</th>
                <th>Deadline</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </section>
      `,
      editTask: `
        <section class="section">
          <h2>Edit Task</h2>
          <form id="editTaskForm">
            <input type="number" name="task_id" placeholder="Task ID" required>
            <input type="text" name="name" placeholder="New Task Name">
            <select name="status">
              <option value="Pending">Pending</option>
              <option value="In Progress">In Progress</option>
              <option value="Completed">Completed</option>
            </select>
            <button type="submit">Update Task</button>
          </form>
        </section>
      `
    };

    function showPage(page) {
      const main = document.getElementById("mainContent");
      main.innerHTML = pages[page];

      // Load dynamic content if needed
      if (page === "addTask") loadMembers();
      if (page === "addMember") loadMembersList();
      if (page === "viewTasks") loadTasks();
      if (page === "editTask") console.log("Edit page loaded");
    }

    // Add Task
    document.body.addEventListener("submit", async e => {
      if (e.target.id === "taskForm") {
        e.preventDefault();
        const formData = Object.fromEntries(new FormData(e.target).entries());
        const res = await fetch(`${API_BASE}/tasks`, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(formData)
        });
        const data = await res.json();
        alert(data.message || "Task added!");
        e.target.reset();
      }

      if (e.target.id === "memberForm") {
        e.preventDefault();
        const formData = Object.fromEntries(new FormData(e.target).entries());
        const res = await fetch(`${API_BASE}/projects/1/members`, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(formData)
        });
        const data = await res.json();
        alert(data.message || "Member added!");
        e.target.reset();
        loadMembersList();
      }

      if (e.target.id === "editTaskForm") {
        e.preventDefault();
        const formData = Object.fromEntries(new FormData(e.target).entries());
        const res = await fetch(`${API_BASE}/tasks/${formData.task_id}`, {
          method: "PUT",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(formData)
        });
        const data = await res.json();
        alert(data.message || "Task updated!");
        e.target.reset();
      }
    });

    // Load Members Dropdown
    async function loadMembers() {
      try {
        const res = await fetch(`${API_BASE}/projects/1/members`);
        const members = await res.json();
        const dropdown = document.getElementById("assigneeDropdown");
        dropdown.innerHTML = `<option value="">-- Select Member --</option>`;
        members.forEach(m => {
          const option = document.createElement("option");
          option.value = m.id;
          option.textContent = m.name;
          dropdown.appendChild(option);
        });
      } catch (err) { console.error(err); }
    }

    // Load Member List
    async function loadMembersList() {
      try {
        const res = await fetch(`${API_BASE}/projects/1/members`);
        const members = await res.json();
        const list = document.getElementById("memberList");
        list.innerHTML = "";
        members.forEach(m => {
          const li = document.createElement("li");
          li.textContent = `${m.name} (${m.role})`;
          list.appendChild(li);
        });
      } catch (err) { console.error(err); }
    }

    // Load Tasks Table
    async function loadTasks() {
      try {
        const res = await fetch(`${API_BASE}/projects/1/tasks`);
        const tasks = await res.json();
        const tbody = document.querySelector("#taskTable tbody");
        tbody.innerHTML = "";
        tasks.forEach(task => {
          tbody.innerHTML += `
            <tr>
              <td>${task.name}</td>
              <td>${task.assignee_name || "Unassigned"}</td>
              <td>${task.deadline || "-"}</td>
              <td>${task.status}</td>
            </tr>
          `;
        });
      } catch (err) { console.error(err); }
    }

    // Load default page
    showPage("dashboard");
  </script>
</body>
</html>
