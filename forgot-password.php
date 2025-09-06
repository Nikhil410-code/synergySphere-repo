<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SynergySphere | Forgot Password</title>
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
      <a href="index.html" class="text-indigo-700 font-bold text-xl">SynergySphere</a>
      <nav class="space-x-6 font-medium text-gray-700 text-sm">
        <a href="index.html" class="nav-link">Home</a>
        <a href="solutions.html" class="nav-link">Solutions</a>
        <a href="work.html" class="nav-link">Work</a>
        <a href="about.html" class="nav-link">About</a>
        <a href="login.html" class="nav-link text-indigo-600 font-semibold">Login</a>
      </nav>
    </div>
  </header>

  <!-- Forgot Password Form -->
  <section class="flex-grow flex items-center justify-center px-6 py-16">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-8">
      <h1 class="text-2xl font-bold text-indigo-700 mb-6 text-center">Forgot Password</h1>
      <p class="text-gray-600 text-center mb-6">
        Enter your email address and we’ll send you a link to reset your password.
      </p>
      <form>
        <!-- Email Input -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required
                 class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>
        <!-- Submit Button -->
        <button type="submit"
                class="w-full bg-indigo-600 text-white px-4 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
          Send Reset Link
        </button>
      </form>
      <!-- Back to Login -->
      <p class="text-sm text-gray-600 mt-6 text-center">
        Remembered your password? 
        <a href="login.html" class="text-indigo-600 font-semibold hover:underline">Back to Login</a>
      </p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white py-10 px-4 sm:px-6 lg:px-8 mt-auto shadow-inner">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-8 text-sm text-gray-700">
      <div>
        <h4 class="font-semibold text-gray-900 mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="index.html">Home</a></li>
          <li><a href="solutions.html">Solutions</a></li>
          <li><a href="work.html">Work</a></li>
          <li><a href="about.html">About</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold text-gray-900 mb-4">Company</h4>
        <ul class="space-y-2">
          <li><a href="about.html">About Us</a></li>
          <li><a href="careers.html">Careers</a></li>
          <li><a href="contact.html">Contact</a></li>
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
