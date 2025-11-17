<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Home</title>
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
        body { font-family: 'Poppins', sans-serif; }
        .gradient-text {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-dark-bg text-gray-100">

<!-- Navbar -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-dark-bg/80 backdrop-blur-lg border-b border-gray-800">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
        <a href="/" class="text-2xl font-bold">Port<span class="text-accent-red">folio</span></a>
        <div class="space-x-8 hidden md:flex">

            <a href="/index" class="hover:text-accent-red transition">Home
            <a href="/blog" class="hover:text-accent-red transition">Blog</a>
            <a href="/contact" class="hover:text-accent-red transition">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="min-h-screen flex items-center justify-center text-center px-4 pt-24">
    <div class="max-w-3xl mx-auto animate-fade-in">
        <p class="text-accent-red text-sm tracking-widest uppercase mb-3">
            {{ $welcome }}
        </p>

        <h1 class="text-5xl md:text-7xl font-extrabold mb-4 gradient-text">
            {{ $name }}
        </h1>

        <p class="text-gray-400 text-lg md:text-xl mb-8">
            {{ $status }}
        </p>

        <a href="/blog" class="px-8 py-3 bg-accent-red hover:bg-accent-red-dark rounded-lg font-medium transition">
            Lihat Tentang Saya
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark-card text-center py-6 border-t border-gray-800">
    <p class="text-gray-400 text-sm">
        © 2024 Portfolio - by <span class="text-accent-red">Fitrah</span>
    </p>
</footer>

</body>
</html>
