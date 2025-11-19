📁 Struktur Proyek
/app
   /Http
      /Controllers
         PortofolioController.php
         BlogController.php
         ContactController.php

/resources
   /views
      index.blade.php
      blog.blade.php
      contact.blade.php

/public
   /image
      foto1.jpeg
      foto2.jpeg
      foto3.jpeg
      foto4.jpeg

✨ Fitur Utama Website
🏠 1. Halaman Home

Menampilkan nama pemilik portfolio (data diambil dari controller).

Terdapat header hero dengan animasi ringan.

Tombol “Lihat Tentang Saya” yang mengarah ke halaman blog.

Menggunakan warna tema gelap (dark mode aesthetic).

📝 2. Halaman Blog

Berisi informasi profil berupa:

Deskripsi diri (diambil dari controller).

Gambar profil.

Soft skills seperti:
✔ Figma Design
✔ Canva Design
✔ Capcut Editing

Soft skill ditampilkan menggunakan looping dari array controller, sehingga mudah menambah atau mengurangi item.

📩 3. Halaman Contact

Menampilkan:

Form input untuk Nama, Email, dan Pesan.

Akses cepat ke media sosial seperti Instagram, WhatsApp, dan GitHub.

Semua teks (judul, deskripsi, sosial media) dikelola dari controller.

⚙️ Controller Architecture (MVC yang Rapi)

Project ini menerapkan pola MVC dengan baik:

PortofolioController → Mengelola halaman Home

BlogController → Mengatur data halaman Blog

ContactController → Menyediakan data untuk halaman Contact

Setiap controller mengirimkan variabel ke view menggunakan metode compact().
Hal ini membuat kode lebih mudah dirawat dan memisahkan logic dari tampilan.

🎨 UI/UX & Desain

Menggunakan TailwindCSS CDN, sehingga proses styling ringan & cepat.

Warna utama:

dark-bg (hitam elegan)

dark-card

accent-red (warna merah sebagai highlight UI)

Efek animasi seperti:

hover-lift

backdrop blur

gradient text

Desain clean dan modern mengikuti tren website portfolio saat ini.