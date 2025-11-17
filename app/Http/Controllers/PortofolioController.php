<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PortofolioController extends Controller
{
    public function index()
    {
        // Data yang akan dikirim ke view
        $name = "I'm Andi Muh Fitrah";
        $welcome = "Welcome to My Portfolio";
        $status = "Mahasiswa Semester 5";

        return view('index', compact('name', 'welcome', 'status'));
    }

        public function blog()
    {
        // ABOUT SECTION
        $about_title = "I'm an Electrical Engineering student at Makassar State University.";
        $about_desc = "I'm interested in software development, AI, and digital technology. 
                       I utilize analytical, collaborative, and leadership skills 
                       to contribute to the technology world.";

        // SOFT SKILLS SECTION
        $skills = [
            [
                'img' => 'image/foto2.jpeg',
                'title' => 'Figma Design'
            ],
            [
                'img' => 'image/foto4.jpeg',
                'title' => 'Canva Design'
            ],
            [
                'img' => 'image/foto3.jpeg',
                'title' => 'Capcut Editing'
            ]
        ];

        return view('blog', compact('about_title', 'about_desc', 'skills'));
    }

        public function contact()
    {
        // TITLE & DESCRIPTION
        $title_top = "Get In Touch";
        $title_main = "Contact Me";
        $description = "Silakan tinggalkan pesan atau terhubung melalui media sosial di bawah ini.";

        // SOCIAL MEDIA
        $socials = [
            [
                'icon' => 'fab fa-instagram',
                'url'  => '#'
            ],
            [
                'icon' => 'fab fa-whatsapp',
                'url'  => '#'
            ],
            [
                'icon' => 'fab fa-github',
                'url'  => '#'
            ],
        ];

        return view('contact', compact('title_top', 'title_main', 'description', 'socials'));
    }

    public function welcome() {
        return view('welcome'); // bisa diganti apa saja
    }

}
