<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @livewireStyles
   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="{{ url('/') }}">CLEONATECH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#hero') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#tech') }}">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="section-bg">
        @livewire('home')
    </section>
    <section id="about" class="section-bg">
        @livewire('about')
    </section>
    <section id="services" class="bg-white">
        @livewire('Services')
    </section>
    <section id="tech" class="section-bg">
        @livewire('technology')
    </section>
    <section id="portfolio" class="bg-white">
        @livewire('portfolio')
    </section>
    <section id="contact" class="section-bg">
        @livewire('contact')
    </section>
    <section id="footer" class="bg-white">
        @livewire('footer')
    </section>

    @livewireScripts
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+EO9pU2M7NVdln3GkFRG4c+OGc7F7" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggler = document.querySelector('.navbar-toggler');
            const navbarNav = document.getElementById('navbarNav');

            toggler.addEventListener('click', function() {
                navbarNav.classList.toggle('show');
            });

            const links = document.querySelectorAll('nav ul li a');

            for (const link of links) {
                link.addEventListener('click', function(e) {
                    const targetId = link.getAttribute('href');
                    if (targetId.startsWith('#')) {
                        e.preventDefault();
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 56, // Adjust offset for fixed navbar
                                behavior: 'smooth'
                            });
                        }
                        // Close the navbar on mobile after clicking
                        if (navbarNav.classList.contains('show')) {
                            navbarNav.classList.remove('show');
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>
