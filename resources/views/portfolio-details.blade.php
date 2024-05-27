<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Swiper CSS -->
   
    <!-- Custom CSS -->
    <style>
        .portfolio-heading {
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 50px;
            padding-bottom: 20px;
            position: relative;
            color: #434175;
            text-align: center;
        }
        /* Additional CSS for Swiper */
       
    </style>
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

    <main id="main">
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="portfolio-heading">PORTFOLIO DETAILS</div>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($item['images'] as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset($image) }}" class="img-fluid" alt="">
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Navigation -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: {{ $item['category'] }}</li>
                                <li><strong>Client</strong>: {{ $item['client'] }}</li>
                                <li><strong>Project date</strong>: {{ $item['date'] }}</li>
                                <li><strong>Project URL</strong>: <a href="{{ $item['url'] }}">{{ $item['url'] }}</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Description</h2>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->

    <footer id="footer" class="contact section-bg">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>CLEONATECH.</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#tech">Technology</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Mobile Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">SEO analysis</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Social Media Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Graphic Design</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>CLEONATECH</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
                    Designed by <a href="https://appslanka.lk/">AppsLanka</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-b6udZbqvu6vN4i1sIabshR9Wmdkce0QIh0XsCQn5Sa3w95SgZhjD3FwnYs5rClL5" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script>
    var imageElements = document.querySelectorAll('.swiper-slide img');
    var currentIndex = 0;
    var delayTimer;

    function showNextImage() {
        if (currentIndex < imageElements.length - 1) {
            imageElements[currentIndex].style.display = 'none';
            currentIndex++;
            imageElements[currentIndex].style.display = 'block';
        } else {
            clearTimeout(delayTimer);
        }
    }

    window.addEventListener('load', function() {
        for (var i = 1; i < imageElements.length; i++) {
            imageElements[i].style.display = 'none';
        }

        delayTimer = setTimeout(function() {
            showNextImage();
            delayTimer = setInterval(showNextImage, 2000); // Change slide every 5 seconds
        }, 2000); // Initial delay of 5 seconds
    });
</script>
</body>
</html>
