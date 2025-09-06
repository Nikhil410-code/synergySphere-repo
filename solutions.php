<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SynergySphere | Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom right, #FFDEE9, #B5FFFC, #D5E0F2);
    }
    .nav-link:hover {
      color: #5a67d8;
      text-decoration: underline;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body class="flex flex-col min-h-screen">

  <!-- Navbar -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="index.php" class="text-indigo-700 font-bold text-xl">SynergySphere</a>
      <nav class="space-x-6 font-medium text-gray-700 text-sm">
        <a href="index.php" class="nav-link">Home</a>
        <a href="solutions.php" class="nav-link text-indigo-600 font-semibold">Solutions</a>
        <a href="work.php" class="nav-link">Work</a>
        <a href="about.php" class="nav-link">About</a>
        <a href="login.php" class="nav-link">Login</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-white rounded-lg shadow-lg max-w-7xl mx-auto mt-10 px-6 py-16 text-center">
    <h1 class="text-4xl font-extrabold text-indigo-700 mb-6">Our Solutions</h1>
    <p class="text-gray-700 text-lg leading-relaxed max-w-3xl mx-auto">
      SynergySphere provides powerful solutions to transform the way teams work. 
      From managing tasks to seamless communication, our platform ensures efficiency, clarity, and productivity.
    </p>
  </section>

  <!-- Solutions Grid -->
  <section class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-3 gap-10">
    <!-- Task Management -->
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
      <i data-feather="check-square" class="mx-auto mb-4 text-indigo-600" width="48" height="48"></i>
      <h3 class="text-xl font-semibold mb-2">Task Management</h3>
      <p class="text-gray-600">Plan, assign, and track tasks with clear deadlines and statuses (To-Do, In Progress, Done).</p>
    </div>
    <!-- Team Communication -->
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
      <i data-feather="message-circle" class="mx-auto mb-4 text-indigo-600" width="48" height="48"></i>
      <h3 class="text-xl font-semibold mb-2">Team Communication</h3>
      <p class="text-gray-600">Collaborate with threaded discussions that keep everyone in the loop and organized.</p>
    </div>
    <!-- Dashboard -->
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
      <i data-feather="layout" class="mx-auto mb-4 text-indigo-600" width="48" height="48"></i>
      <h3 class="text-xl font-semibold mb-2">Project Dashboard</h3>
      <p class="text-gray-600">A unified dashboard that shows all projects, progress, and upcoming deadlines in one place.</p>
    </div>
    <!-- Insights -->
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
      <i data-feather="bar-chart-2" class="mx-auto mb-4 text-indigo-600" width="48" height="48"></i>
      <h3 class="text-xl font-semibold mb-2">Analytics & Insights</h3>
      <p class="text-gray-600">Get real-time insights into project performance and resource allocation to avoid bottlenecks.</p>
    </div>
    <!-- Security -->
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
      <i data-feather="shield" class="mx-auto mb-4 text-indigo-600" width="48" height="48"></i>
      <h3 class="text-xl font-semibold mb-2">Secure & Reliable</h3>
      <p class="text-gray-600">Your data is protected with robust security protocols to ensure privacy and trust.</p>
    </div>
    <!-- Integrations -->
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
      <i data-feather="git-merge" class="mx-auto mb-4 text-indigo-600" width="48" height="48"></i>
      <h3 class="text-xl font-semibold mb-2">Seamless Integrations</h3>
      <p class="text-gray-600">Connect SynergySphere with your favorite tools to create a truly unified workflow.</p>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="max-w-7xl mx-auto px-6 py-16 text-center">
    <h2 class="text-3xl font-bold text-indigo-700 mb-6">Empower Your Team Today</h2>
    <p class="text-gray-700 text-lg max-w-2xl mx-auto mb-8">
      SynergySphere isn’t just a tool — it’s your team’s command center. 
      Discover how our solutions can simplify your workflows and boost productivity.
    </p>
    <a href="contact.html" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
      Contact Us
    </a>
  </section>

  <!-- Footer -->
  <footer class="bg-white py-10 px-4 sm:px-6 lg:px-8 mt-auto shadow-inner">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-8 text-sm text-gray-700">
      <div>
        <h4 class="font-semibold text-gray-900 mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="index.php">Home</a></li>
          <li><a href="solutions.php">Solutions</a></li>
          <li><a href="work.php">Work</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold text-gray-900 mb-4">Company</h4>
        <ul class="space-y-2">
          <li><a href="about.php">About Us</a></li>
          <li><a href="careers.php">Careers</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold text-gray-900 mb-4">Connect</h4>
        <ul class="space-y-2">
          <li><a href="mailto:hello@synergysphere.com">Email Us</a></li>
          <li><a href="https://twitter.com" target="_blank" rel="noopener">Twitter</a></li>
          <li><a href="https://github.com" target="_blank" rel="noopener">GitHub</a></li>
          <li><a href="https://linkedin.com" target="_blank" rel="noopener">LinkedIn</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center mt-8 text-xs text-gray-500">
      © 2025 SynergySphere. All rights reserved.
    </div>
  </footer>

  <script>
    feather.replace();
  </script>
</body>
</html>
