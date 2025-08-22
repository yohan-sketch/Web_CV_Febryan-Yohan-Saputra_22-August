<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Febryan YohanS - Web CV</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

  <!-- Navbar -->
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

  <!-- Content -->
  <main class="max-w-7xl mx-auto px-4 lg:px-8 pt-24 pb-10 grid lg:grid-cols-3 gap-10 flex-grow pt-24 px-6">

    <!-- Main Left -->
    <div class="lg:col-span-2 space-y-10">
      <!-- Highlight Project -->
      <section>
        <h2 class="text-2xl font-bold mb-6 text-blue-600">Latest Project</h2>
        <div class="grid sm:grid-cols-2 gap-6">
          <div class="bg-white shadow rounded-xl overflow-hidden">
            <img src="portfolio/10_secure service agreement form_19-21agustus.png" alt="project" class="w-full h-56 object-cover">
            <div class="p-4">
              <h3 class="font-semibold text-lg">Secure Service Agreement Form</h3>
              <p class="text-sm text-gray-600 mb-3">Create secure service agreement form using PHP.</p>              
            </div>
          </div>
          <div class="bg-white shadow rounded-xl overflow-hidden">
            <img src="portfolio/9_design web Develop  with Atlas_13-15agustus.png" alt="project" class="w-full h-56 object-cover">
            <div class="p-4">
              <h3 class="font-semibold text-lg">Design Web For "Develop with Atlas" Company</h3>
              <p class="text-sm text-gray-600 mb-3">Create a Design Web For "Develop with Atlas" Company with Figma.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Grid Projects -->
      <section id="projects">
        <h2 class="text-2xl font-bold mb-6 text-blue-600">More Projects</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white shadow rounded-xl overflow-hidden">
            <img src="portfolio/1_graphic-cv_23juli.png" alt="project" class="w-full h-40 object-cover">
            <div class="p-4">
              <h3 class="font-semibold">Graphic CV</h3>
              <p class="text-sm text-gray-600">Create a graphic CV with Canva.</p>
            </div>
          </div>
          <div class="bg-white shadow rounded-xl overflow-hidden">
            <img src="portfolio/2_webCV_24juli.png" alt="project" class="w-full h-40 object-cover">
            <div class="p-4">
              <h3 class="font-semibold">Web CV</h3>
              <p class="text-sm text-gray-600">Create an CV with Tailwind CSS.</p>
            </div>
          </div>
          <div class="bg-white shadow rounded-xl overflow-hidden">
            <img src="portfolio/3_Animated CV_25juli.png" alt="project" class="w-full h-40 object-cover">
            <div class="p-4">
              <h3 class="font-semibold">Animated CV</h3>
              <p class="text-sm text-gray-600">Create an Animated CV with Canva.</p>
            </div>
          </div>
        </div>
        
      </section>
    </div>

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

  </main>

  <!-- Footer -->
  <footer class="py-6 text-center text-sm text-gray-500 border-t">
    © 2025 Febryan YohanS. All rights reserved.
  </footer>

</body>
</html>
