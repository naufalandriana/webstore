<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Store - MCS Web Studio</title>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <style>
  html {
    scroll-behavior: smooth;
  }
  .filter-btn.active {
    background-color: #2563eb; /* Tailwind blue-600 */
    color: white;
    border-color: #2563eb;
  }

  .filter-btn.active:hover {
    background-color: #1e40af; /* Tailwind blue-700 */
  }
  </style>    

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif']
          }
        }
      }
    }

  </script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-poppins">

  <!-- Navbar -->
<nav class="fixed top-0 mb-12 left-0 w-full bg-transparent border-b-2 border-gray-300 dark:border-gray-700 backdrop-blur-md shadow-lg z-50">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-">My Web Store</h1>
    <div class="space-x-6">
      <a href="#home" class="hover:text-blue-500 transition duration-300">Home</a>
      <a href="#produk" class="hover:text-blue-500 transition duration-300">Products</a>
      <a href="#faq" class="hover:text-blue-500 transition duration-300">FAQ</a>
      <a href="#contact" class="hover:text-blue-500 transition duration-300">Contact</a>
    </div>
  </div>
</nav>


<!-- Hero + Tentang Kami -->
<section id="home" class="pt-32 pb-32 bg-gradient-to-r from-white to-blue-50 mt-4">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div data-aos="fade-right">
      <h1 class="text-4xl md:text-6xl font-bold text-gray-800 leading-tight mb-8">
        Bangun Website Sat Set
      </h1>
      <p class="text-xl text-gray-600 mb-8 text-justify">
        Butuh <strong>Website Sat-Set?</strong> <br> Pilih <strong>template</strong>, Dan dapatkan <strong>source code</strong>-nya.
      </p>

      <div class="flex flex-wrap gap-6">
        <a href="#produk" class="px-4 py-2 md:px-6 md:py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Lihat Template</a>
        <a href="#contact" class="px-4 py-2 md:px-6 md:py-4 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">Hubungi Kami</a>
      </div>
    </div>
    <div data-aos="fade-left">
      <img src="hero.png" alt="hero image" class="rounded-xl shadow-md w-full h-auto">
    </div>
  </div>
</section>

<div class="flex justify-center mt-[-2rem]">
  <a href="#produk" class="animate-bounce text-black">
    <i class="ph ph-arrow-down text-4xl"></i>
  </a>
</div>
    <!-- Produk Section Placeholder -->
    <section id="produk" class="py-20 px-6 bg-white">
      <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">Pilihan Template</h2>
        <div class="flex flex-wrap justify-center gap-4 mb-12">
          <button class="filter-btn px-4 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition active" data-filter="all">Semua</button>
          <button class="filter-btn px-4 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition" data-filter="portofolio">Portofolio</button>
          <button class="filter-btn px-4 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition" data-filter="toko">Toko Online</button>
          <button class="filter-btn px-4 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition" data-filter="company">Company Profile</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Product -->
          <div class="template-card relative bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-xl transition-transform transform hover:-translate-y-1 overflow-hidden" data-category="company">
            <!-- ICON SECTION (pojok kanan atas) -->
            <div class="absolute top-3 right-3 flex space-x-2 z-10">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="HTML">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JS" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="JavaScript">
              <img src="tailwind-logo.svg" alt="Tailwind" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="Tailwind CSS">
            </div>

            <!-- Gambar Preview -->
            <div class="bg-gray-200 h-48 flex items-center justify-center">
              <button class="px-4 py-2 border border-gray-500 rounded hover:bg-gray-100 dark:hover:bg-gray-600">Preview</button>
            </div>

            <!-- Detail Template -->
            <div class="p-6 bg-blue-800 text-white text-start">
              <h4 class="font-bold text-lg mb-2">Company 1</h4>
              <p class="italic text-sm mb-4">Cocok untuk personal branding atau company profile sederhana.</p>
              <div class="flex justify-between">
                <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Ask to custom</button>
                <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Buy</button>
              </div>
            </div>
          </div>

         <!-- Product -->
         <div class="template-card bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-xl transition-transform transform hover:-translate-y-1 overflow-hidden" data-category="portofolio">
            <!-- ICON SECTION (pojok kanan atas) -->
            <div class="absolute top-3 right-3 flex space-x-2 z-10">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="HTML">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JS" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="JavaScript">
                <img src="tailwind-logo.svg" alt="Tailwind" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="Tailwind CSS">
            </div>
            <div class="bg-gray-200 h-48 flex items-center justify-center">
              <button class="px-4 py-2 border border-gray-500 rounded hover:bg-gray-100 dark:hover:bg-gray-600">Preview</button>
            </div>
            <div class="p-6 bg-blue-800 text-white text-start">
              <h4 class="font-bold text-lg mb-2">Portofolio 1</h4>
              <p class="italic text-sm mb-4">Website toko online sederhana dengan fitur keranjang dan checkout.</p>
              <div class="flex justify-between">
                <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Ask to custom</button>
                <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Buy</button>
              </div>
            </div>
         </div>
         <!-- Product -->
         <div class="template-card bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-xl transition-transform transform hover:-translate-y-1 overflow-hidden" data-category="toko">
          <div class="absolute top-3 right-3 flex space-x-2 z-10">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="HTML">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JS" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="JavaScript">
                <img src="tailwind-logo.svg" alt="Tailwind" class="w-8 h-8 rounded-full bg-white p-1 shadow" title="Tailwind CSS">
          </div> 
         <div class="bg-gray-200 h-48 flex items-center justify-center">
            <button class="px-4 py-2 border border-gray-500 rounded hover:bg-gray-100 dark:hover:bg-gray-600">Preview</button>
          </div>
          <div class="p-6 bg-blue-800 text-white text-start">
            <h4 class="font-bold text-lg mb-2">Toko 1</h4>
            <p class="italic text-sm mb-4">Tampilkan karya dan pengalamanmu dalam tampilan yang modern dan rapi.</p>
            <div class="flex justify-between">
              <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Ask to custom</button>
              <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Buy</button>
            </div>
          </div>
        </div>
         <!-- Product -->
         <div class="template-card bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-xl transition-transform transform hover:-translate-y-1 overflow-hidden" data-category="portofolio">
          <div class="bg-gray-200 h-48 flex items-center justify-center">
            <button class="px-4 py-2 border border-gray-500 rounded hover:bg-gray-100 dark:hover:bg-gray-600">Preview</button>
          </div>
          <div class="p-6 bg-blue-800 text-white text-start">
            <h4 class="font-bold text-lg mb-2">Portofolio 2</h4>
            <p class="italic text-sm mb-4">Tampilkan karya dan pengalamanmu dalam tampilan yang modern dan rapi.</p>
            <div class="flex justify-between">
              <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Ask to custom</button>
              <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Buy</button>
            </div>
          </div>
        </div>
         <!-- Product -->
         <div class="template-card bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-xl transition-transform transform hover:-translate-y-1 overflow-hidden" data-category="company">
          <div class="bg-gray-200 h-48 flex items-center justify-center">
            <button class="px-4 py-2 border border-gray-500 rounded hover:bg-gray-100 dark:hover:bg-gray-600">Preview</button>
          </div>
          <div class="p-6 bg-blue-800 text-white text-start">
            <h4 class="font-bold text-lg mb-2">Company 2</h4>
            <p class="italic text-sm mb-4">Tampilkan karya dan pengalamanmu dalam tampilan yang modern dan rapi.</p>
            <div class="flex justify-between">
              <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Ask to custom</button>
              <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Buy</button>
            </div>
          </div>
        </div>
         <!-- Product -->
         <div class="template-card bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-xl transition-transform transform hover:-translate-y-1 overflow-hidden" data-category="toko">
          <div class="bg-gray-200 h-48 flex items-center justify-center">
            <button class="px-4 py-2 border border-gray-500 rounded hover:bg-gray-100 dark:hover:bg-gray-600">Preview</button>
          </div>
          <div class="p-6 bg-blue-800 text-white text-start">
            <h4 class="font-bold text-lg mb-2">Toko 2</h4>
            <p class="italic text-sm mb-4">Tampilkan karya dan pengalamanmu dalam tampilan yang modern dan rapi.</p>
            <div class="flex justify-between">
              <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Ask to custom</button>
              <button class="px-4 py-2 border rounded hover:bg-white hover:text-blue-800">Buy</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="faq" class="bg-gray-100 py-20 px-6 ">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">FAQ</h2>
    <div class="space-y-4">
      <!-- FAQ Item -->
      <div class="bg-white shadow rounded-lg border-2 border-blue-600">
        <button class="w-full text-left px-6 py-4 text-lg font-semibold text-gray-800 flex justify-between items-center toggle-btn">
          Berapa lama proses bikin website-nya?
          <i class="ph ph-caret-down text-2xl transition-transform duration-300"></i>
        </button>
        <div class="px-6 pb-4 text-gray-600 hidden">
          Biasanya 1–3 hari kerja, tergantung seberapa custom request lo. Makin jelas, makin cepet kelar!
        </div>
      </div>

      <div class="bg-white shadow rounded-lg border-2 border-blue-600">
        <button class="w-full text-left px-6 py-4 text-lg font-semibold text-gray-800 flex justify-between items-center toggle-btn">
          Bisa request desain sendiri gak?
          <i class="ph ph-caret-down text-2xl transition-transform duration-300"></i>
        </button>
        <div class="px-6 pb-4 text-gray-600 hidden">
          Bisa banget! Lo bisa pilih template yang ada atau kirim referensi desain, nanti gue bantu custom sesuai keinginan lo.
        </div>
      </div>

      <div class="bg-white shadow rounded-lg border-2 border-blue-600" >
        <button class="w-full text-left px-6 py-4 text-lg font-semibold text-gray-800 flex justify-between items-center toggle-btn">
          Dapet apa aja setelah jadi?
          <i class="ph ph-caret-down text-2xl transition-transform duration-300"></i>
        </button>
        <div class="px-6 pb-4 text-gray-600 hidden">
          Lo dapet website yang udah online, plus full <strong>source code</strong>-nya juga. Jadi bebas mau edit sendiri kapan aja.
        </div>
      </div>

      <div class="bg-white shadow rounded-lg border-2 border-blue-600">
        <button class="w-full text-left px-6 py-4 text-lg font-semibold text-gray-800 flex justify-between items-center toggle-btn">
          Hosting & domain udah termasuk?
          <i class="ph ph-caret-down text-2xl transition-transform duration-300"></i>
        </button>
        <div class="px-6 pb-4 text-gray-600 hidden">
          Hosting bisa gue bantu sediain (ada opsi gratis & berbayar), tapi domain tergantung kebutuhan lo. Bisa diskusi dulu!
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.toggle-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const content = btn.nextElementSibling;
      const icon = btn.querySelector('i');

      content.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    });
  });
</script>

<section class="bg-white py-16 px-6">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-10 text-black">
      Apa Kata Mereka?
    </h2>

    <!-- Carousel Wrapper -->
    <div class="overflow-hidden">
      <div id="testimonial-carousel" class="flex space-x-1 md:space-x-6 transition-transform duration-500 ease-in-out">
        <!-- Testimoni 1 -->
        <div class="min-w-full md:min-w-[33.3333%] bg-gray-50 px-4 py-2 rounded-2xl border-l-4 border-blue-800 shadow hover:shadow-md transition">
          <p class="text-gray-600 mb-4 italic">"Prosesnya cepet banget! Gue cuma pilih template, request dikit, terus langsung jadi. Keren sih!"</p>
          <div class="font-semibold text-gray-800">– Raka, Freelancer</div>
        </div>
        <!-- Testimoni 2 -->
        <div class="min-w-full md:min-w-[33.3333%] bg-gray-50 p-4 rounded-2xl border-l-4 border-blue-800 shadow hover:shadow-md transition">
          <p class="text-gray-600 mb-4 italic">"Web-nya beneran langsung tayang, gak ribet. Dan yang paling penting, gue dapet source code-nya."</p>
          <div class="font-semibold text-gray-800">– Nisa, Online Shop Owner</div>
        </div>
        <!-- Testimoni 3 -->
        <div class="min-w-full md:min-w-[33.3333%] bg-gray-50 p-4 rounded-2xl border-l-4 border-blue-800 shadow hover:shadow-md transition">
          <p class="text-gray-600 mb-4 italic">"Support-nya oke banget, fast response. Gue puas banget sama hasil dan pelayanannya."</p>
          <div class="font-semibold text-gray-800">– Dimas, Digital Marketer</div>
        </div>
        <!-- Testimoni 4 -->
        <div class="min-w-full md:min-w-[33.3333%] bg-gray-50 p-4 rounded-2xl border-l-4 border-blue-800 shadow hover:shadow-md transition">
          <p class="text-gray-600 mb-4 italic">"Harga bersahabat, hasil maksimal. Gue gak nyangka bisa dapet web sekeren ini dengan budget segitu!"</p>
          <div class="font-semibold text-gray-800">– Andi, UMKM Owner</div>
        </div>
      </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="flex justify-between mt-6">
      <button onclick="prevSlide()" class="bg-blue-800 hover:bg-blue-200 text-white p-2 rounded-md transition">
        <i class="ph ph-caret-left text-xl"></i>
      </button>
      <button onclick="nextSlide()" class="bg-blue-800 hover:bg-blue-200 text-white p-2 rounded-md transition">
        <i class="ph ph-caret-right text-xl"></i>
      </button>
    </div>
  </div>
</section>

<script>
  const carousel = document.getElementById('testimonial-carousel');
  let slideIndex = 1; // Mulai dari slide tengah (index 1)

  // Update posisi carousel
  function updateCarousel() {
    const screenWidth = window.innerWidth;
    const slideWidth = screenWidth >= 768 ? carousel.offsetWidth / 3 : carousel.offsetWidth;
    carousel.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
  }

  // Geser ke slide berikutnya
  function nextSlide() {
    const maxIndex = carousel.children.length - (window.innerWidth >= 768 ? 3 : 1);
    if (slideIndex < maxIndex) {
      slideIndex++;
      updateCarousel();
    }
  }

  // Geser ke slide sebelumnya
  function prevSlide() {
    if (slideIndex > 0) {
      slideIndex--;
      updateCarousel();
    }
  }

  // Resize listener untuk update posisi saat ukuran layar berubah
  window.addEventListener('resize', () => {
    updateCarousel();
  });

  updateCarousel(); // Pastikan posisi awal sesuai dengan yang diinginkan
</script>


  <!-- Contact Section Placeholder -->
  <section id="contact" class="py-20 px-6 bg-gray-50">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Hubungi Kami</h2>
      <form class="space-y-6">
        <input type="text" placeholder="Nama" class="w-full px-4 py-3 text-black border rounded dark:bg-gray-200" />
        <input type="email" placeholder="Email" class="w-full px-4 py-3 text-black border rounded dark:bg-gray-200" />
        <textarea placeholder="Pesan" rows="5" class="w-full px-4 py-3 text-black border rounded dark:bg-gray-200"></textarea>
        <button class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300">Kirim Pesan</button>
      </form>
    </div>
    </div>
  </section>

  <footer class="bg-white border-t mt-12">
    <div class="max-w-6xl mx-auto px-6 py-6 text-center text-gray-500">
      &copy; 2025 MCS Web Studio. All rights reserved.
    </div>
  </footer>
  <style>
    .animate-fade-in {
      animation: fadeIn 2s ease-out;
    }
    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
  </style>


  <script>
    AOS.init({ duration: 1000, once: true });
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.template-card');

    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        // Remove active from all, add to clicked
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.getAttribute('data-filter');

        cards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.classList.remove('hidden');
          } else {
            card.classList.add('hidden');
          }
        });
      });
    });
  </script>
</body>
</html>
