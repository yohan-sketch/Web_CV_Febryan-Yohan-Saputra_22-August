<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact - My Web CV</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

  <!-- Header -->
  <header class="fixed top-0 left-0 right-0 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 text-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-3">
      <img src="Concept2_whitebg_Febryan.png" 
           alt="Logo" 
           class="w-10 h-10">
      <h1 class="text-xl font-bold">YohanS Company</h1>
    </div>
      <nav class="space-x-6 hidden sm:block">
        <a href="index.php" class="hover:underline">Home</a>
        <a href="about.php" class="hover:underline">About</a>
        <a href="skills.php" class="hover:underline">Skills</a>
        <a href="projects.php" class="hover:underline">Projects</a>
        <a href="contact.php" class="hover:underline font-semibold">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Layout -->
  <div class="flex pt-20 max-w-7xl mx-auto px-6">

    <!-- Main Content -->
    <main class="flex-1 pr-6">
      <section class="py-10">
        <h2 class="text-3xl font-bold mb-6 text-blue-600">Contact Me</h2>
        <p class="mb-6 text-lg text-gray-700">
          Feel free to reach out to me via the form below or through my social links.  
          I’ll get back to you as soon as possible.
        </p>

        <!-- Contact Form -->
        <form action="#" method="POST" class="bg-white shadow-md rounded-xl p-6 space-y-4">
          <div>
            <label class="block text-gray-700 font-medium mb-2">Full Name</label>
            <input type="text" name="name" placeholder="Your full name" 
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" name="email" placeholder="Your email address" 
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-2">Message</label>
            <textarea name="message" rows="5" placeholder="Your message..." 
                      class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
          <button type="submit" 
                  class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Send Message
          </button>
        </form>
      </section>
    </main>

    <!-- Sidebar Right -->
    <aside class="space-y-6">
      <div class="bg-white shadow rounded-xl p-6 text-center">
        <img src="https://source.unsplash.com/150x150/?portrait" class="mx-auto rounded-full mb-4" alt="Profile">
        <!-- Foto Lingkaran -->
    <div class="mt-4 flex justify-center">
      <img src="foto profil.png" 
           alt="Profile Photo" 
           class="w-32 h-32 rounded-full object-cover border-4 border-indigo-500 shadow-md">
    </div>
        <h3 class="font-semibold text-lg">Febryan Yohan Saputra</h3>
        <p class="text-sm text-gray-600">Graphic Designer & Web Developer</p>
        <a href="https://drive.google.com/file/d/1M9WkDe28Rbn37tq_VLuY7KPRZIOaQ8N1/view?usp=drive_link" target="_blank" class="inline-block mt-4 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 text-white px-4 py-2 rounded-full text-sm hover:opacity-90">
          Download CV
        </a>
      </div>

      <div class="bg-white shadow rounded-xl p-6">
        <h3 class="font-semibold mb-4">Follow Me</h3>
        <div class="flex justify-center gap-4 text-2xl text-blue-600">
          <a href="mailto:bryanyohan02@gmail.com">📧</a>
          <a href="https://github.com/yohan-sketch" target="_blank">🐙</a>
          <a href="https://wa.me/628988708120" target="_blank">💬</a>
        </div>
      </div>
    </aside>
</div>
  </main>
 

  <!-- Footer -->
 <footer class="py-6 text-center text-sm text-gray-500 border-t mt-auto">
    © 2025 Febryan YohanS. All rights reserved.
  </footer>
</body>
</html>
