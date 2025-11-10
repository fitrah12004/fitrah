<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-bg': '#0a0a0a',
                        'dark-card': '#1a1a1a',
                        'accent-red': '#ef4444',
                        'accent-red-dark': '#dc2626',
                    }
                }
            }
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        .hover-lift { transition: .3s; }
        .hover-lift:hover { transform: translateY(-6px); box-shadow: 0 15px 25px rgba(239,68,68,.25); }
    </style>
</head>

<body class="bg-dark-bg text-gray-100">

<!-- NAVBAR -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-dark-bg/80 backdrop-blur-lg border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center py-4">
        <a href="index.html" class="text-2xl font-bold"><span class="text-white">Port</span><span class="text-accent-red">folio</span></a>
        <div class="hidden md:flex space-x-8">
            <a href="index.html" class="nav-link">Home</a>
            <a href="blog.html" class="nav-link">Blog</a>
            <a href="contact.html" class="nav-link text-accent-red">Contact</a>
        </div>
    </div>
</nav>

<!-- CONTACT SECTION -->
<section class="pt-32 px-4 max-w-7xl mx-auto">

    <div class="text-center mb-16">
        <p class="text-accent-red text-sm uppercase tracking-widest mb-4">Get In Touch</p>
        <h2 class="text-4xl md:text-5xl font-bold">Contact Me</h2>
        <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
            Silakan tinggalkan pesan atau terhubung melalui media sosial di bawah ini.
        </p>
    </div>

    <div class="max-w-3xl mx-auto bg-dark-card border border-gray-800 rounded-2xl p-8 md:p-10 hover-lift">

        <form class="space-y-6">
            <input type="text" placeholder="Nama" class="w-full bg-dark-bg p-4 rounded-xl border border-gray-700 focus:border-accent-red outline-none transition">
            <input type="email" placeholder="Email" class="w-full bg-dark-bg p-4 rounded-xl border border-gray-700 focus:border-accent-red outline-none transition">
            <textarea rows="5" placeholder="Pesan" class="w-full bg-dark-bg p-4 rounded-xl border border-gray-700 focus:border-accent-red outline-none transition"></textarea>

            <button class="w-full bg-accent-red hover:bg-accent-red-dark px-6 py-3 rounded-xl text-white font-medium transition">
                Kirim Pesan
            </button>
        </form>

        <div class="text-center mt-10 text-gray-400">
            <p class="mb-4">Atau hubungi lewat:</p>

            <div class="flex justify-center space-x-6 text-xl">
                <a href="#" class="hover:text-accent-red transition"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-accent-red transition"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="hover:text-accent-red transition"><i class="fab fa-github"></i></a>
            </div>
        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="bg-dark-card border-t border-gray-800 py-8 text-center text-gray-400 text-sm mt-20">
    © 2024 Portfolio by <span class="text-accent-red">Fitrah</span>
</footer>

</body>
</html>
