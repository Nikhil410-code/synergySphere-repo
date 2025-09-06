<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);
    $manager = mysqli_real_escape_string($conn, $_POST['manager']);
    $deadline = $_POST['deadline'];
    $priority = $_POST['priority'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $sql = "INSERT INTO projects (name, tags, manager, deadline, priority, description) 
            VALUES ('$name', '$tags', '$manager', '$deadline', '$priority', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Project added!'); window.location='projects.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100 flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md flex flex-col justify-between">
        <div>
            <div class="px-6 py-4 border-b">
                <h1 class="text-xl font-bold text-indigo-600">Company</h1>
            </div>
            <nav class="mt-4 px-6 space-y-2">
                <a href="index.html" class="block py-2 px-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 font-medium">
                    <i data-feather="folder" class="inline w-4 h-4 mr-2"></i> Projects
                </a>
            </nav>
        </div>
        <div class="p-4 border-t">
            <button id="themeToggle" class="w-10 h-10 rounded-full flex items-center justify-center bg-gray-200 hover:bg-gray-300 mb-3">
                <i data-feather="sun" class="w-5 h-5 text-gray-600"></i>
            </button>
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold">U</div>
                <div class="ml-3">
                    <p class="text-sm font-medium">Test User</p>
                    <p class="text-xs text-gray-500">user@mail.com</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main -->
    <main class="flex-1 flex flex-col">
        <header class="flex justify-between items-center p-4 bg-white shadow-sm">
            <div class="text-sm text-gray-600">> Projects > New Project</div>
            <div class="flex gap-2">
                <button onclick="resetForm()" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Discard</button>
                <button onclick="saveProject()" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Save</button>
            </div>
        </header>

        <section class="p-6 overflow-y-auto">
            <form id="projectForm" class="space-y-5 max-w-2xl">
                <div>
                    <label class="block font-medium mb-1">Project Name</label>
                    <input type="text" id="name" class="w-full border rounded-lg p-2" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Tags (comma separated)</label>
                    <input type="text" id="tags" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block font-medium mb-1">Manager</label>
                    <input type="text" id="manager" class="w-full border rounded-lg p-2" placeholder="Manager Name" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Deadline</label>
                    <input type="date" id="deadline" class="w-full border rounded-lg p-2" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Priority</label>
                    <div class="flex gap-4">
                        <label><input type="radio" name="priority" value="Low"> Low</label>
                        <label><input type="radio" name="priority" value="Medium" checked> Medium</label>
                        <label><input type="radio" name="priority" value="High"> High</label>
                    </div>
                </div>
                <div>
                    <label class="block font-medium mb-1">Image</label>
                    <input type="file" id="image" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block font-medium mb-1">Description</label>
                    <textarea id="description" rows="4" class="w-full border rounded-lg p-2"></textarea>
                </div>
            </form>
        </section>
    </main>

    <script>
        feather.replace();

        // Theme toggle
        const themeToggle = document.getElementById("themeToggle");
        const icon = themeToggle.querySelector("i");
        themeToggle.addEventListener("click", () => {
            document.body.classList.toggle("bg-gray-900");
            document.body.classList.toggle("text-white");
            icon.setAttribute("data-feather", document.body.classList.contains("bg-gray-900") ? "moon" : "sun");
            feather.replace();
        });

        function resetForm() {
            document.getElementById("projectForm").reset();
        }

        function saveProject() {
            const name = document.getElementById("name").value;
            const tags = document.getElementById("tags").value.split(",");
            const manager = document.getElementById("manager").value;
            const deadline = document.getElementById("deadline").value;
            const priority = document.querySelector('input[name="priority"]:checked').value;
            const description = document.getElementById("description").value;

            if (!name || !manager || !deadline) {
                alert("Please fill required fields!");
                return;
            }

            const project = {
                name,
                tags,
                manager,
                deadline,
                priority,
                description,
                status: "Active",
                image: "https://via.placeholder.com/300x150/667eea/ffffff?text=Project+Preview"
            };

            let projects = JSON.parse(localStorage.getItem("projects")) || [];
            projects.push(project);
            localStorage.setItem("projects", JSON.stringify(projects));

            window.location.href = "index.html";
        }
    </script>
</body>
</html>
