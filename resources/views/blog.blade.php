<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Blog</title>
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
        .gradient-text { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hover-lift { transition: .3s; } .hover-lift:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(239,68,68,.2); }
    </style>
</head>
<body class="bg-dark-bg text-gray-100">

<!-- NAVBAR -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-dark-bg/80 backdrop-blur-lg border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center py-4">
        <a href="index.html" class="text-2xl font-bold"><span class="text-white">Port</span><span class="text-accent-red">folio</span></a>
        <div class="hidden md:flex space-x-8">
            <a href="index.html" class="nav-link">Home</a>
            <a href="blog.html" class="nav-link text-accent-red">Blog</a>
            <a href="contact.html" class="nav-link">Contact</a>
        </div>
    </div>
</nav>

<section class="pt-32 px-4 max-w-7xl mx-auto">

    <!-- ABOUT -->
    <div class="text-center mb-16">
        <p class="text-accent-red text-sm uppercase tracking-widest mb-4">Our Blogs</p>
        <h2 class="text-4xl md:text-5xl font-bold">ABOUT</h2>
    </div>

    <div class="max-w-4xl mx-auto mb-20 bg-dark-card rounded-2xl overflow-hidden border border-gray-800 hover-lift">
        <div class="h-81 overflow-hidden">
            <img src="{{ asset('image/foto1.jpeg') }}" alt="Antrivia Studio" class="w-full h-full object-contain">
        </div>
        <div class="p-8 text-center">
            <h3 class="text-3xl font-semibold mb-4">
                I'm an Electrical Engineering student at Makassar State University. 
            </h3>
            <p class="text-gray-400">
                I'm interested in software development, AI, and digital technology. I utilize analytical, collaborative, 
                and leadership skills to contribute to the technology world.
            </p>
        </div>
    </div>

    <!-- SOFT SKILLS -->
    <h3 class="text-3xl font-bold uppercase tracking-wider mb-10 border-b border-gray-800 pb-4">Soft Skills</h3>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-dark-card rounded-2xl overflow-hidden border border-gray-800 hover-lift">
           <img src="{{ asset('image/foto2.jpeg') }}" alt="Antrivia Studio" class="w-full h-full object-contain">
            <div class="p-6">
                <h5 class="text-xl font-semibold mb-4">Figma Design</h5>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-dark-card rounded-2xl overflow-hidden border border-gray-800 hover-lift">
            <img src="{{ asset('image/foto4.jpeg') }}" alt="Antrivia Studio" class="w-full h-full object-contain">
            <div class="p-6">
                <h5 class="text-xl font-semibold mb-4">Canva Design</h5>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-dark-card rounded-2xl overflow-hidden border border-gray-800 hover-lift">
            <img src="{{ asset('image/foto3.jpeg') }}" alt="Antrivia Studio" class="w-full h-full object-contain">
            <div class="p-6">
                <h5 class="text-xl font-semibold mb-4">Capcut Editing</h5>
            </div>
        </div>
    </div>

</section>

<footer class="bg-dark-card border-t border-gray-800 py-8 text-center text-gray-400 text-sm mt-20">
    © 2024 Portfolio by <span class="text-accent-red">Fitrah</span>
</footer>
</body>
</html>
