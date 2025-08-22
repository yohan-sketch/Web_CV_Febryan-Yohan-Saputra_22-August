<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Me - Febryan YohanS</title>
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

    <!-- Main Content (About Me) -->
    <div class="lg:col-span-2 space-y-10">
      <section id="about" class="bg-white shadow rounded-xl p-6">
        <h2 class="text-2xl font-bold mb-4">About Me</h2>
        <p class="text-gray-700 leading-relaxed mb-4">
          Halo Saya <span class="font-semibold">Febryan Yohan Saputra</span>, seorang mahasiswa Informatika di 
          <span class="font-semibold">STMIK Bina Patria, Magelang</span>.  
          Saya memiliki ketertarikan dalam bidang <span class="text-blue-600 font-medium">graphic design</span> 
          dan <span class="text-purple-600 font-medium">web development</span>. 
          Fokus utama saya adalah membuat tampilan yang menarik, modern, serta mengutamakan pengalaman pengguna.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
          Selain itu, saya juga aktif mengembangkan project pribadi seperti 
          <span class="italic">Responsive Web CV</span> dengan Tailwind CSS, 
          serta membuat desain visual untuk kebutuhan digital. 
          Saya percaya bahwa kombinasi desain kreatif dan kemampuan teknis dapat menciptakan produk digital yang bernilai.
        </p>
        <p class="text-gray-700 leading-relaxed">
           Misi saya adalah terus belajar, beradaptasi dengan teknologi terbaru, 
          dan menciptakan karya yang bisa memberi manfaat bagi banyak orang.
        </p>
         <!-- Timeline -->
  <section id="timeline" class="py-16 px-6 max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Internship & Education</h2>
    <ol class="relative border-l border-gray-300">
      <li class="mb-10 ml-6">
        <span class="absolute w-4 h-4 bg-blue-600 rounded-full -left-2"></span>
        <h3 class="text-lg font-semibold">Internship - PT Limitless Teknologi Prima</h3>
        <time class="block mb-2 text-sm text-gray-500">2025</time>
        <p>Create graphic design, Web CV, and Animated CV.</p>
      </li>
      <li class="mb-10 ml-6">
        <span class="absolute w-4 h-4 bg-blue-600 rounded-full -left-2"></span>
        <h3 class="text-lg font-semibold">STMIK Bina Patria</h3>
        <time class="block mb-2 text-sm text-gray-500">2022 - Sekarang</time>
        <p>Study Program: Informatics Engineering – S1</p>
      </li>
    </ol>
  </section>
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
