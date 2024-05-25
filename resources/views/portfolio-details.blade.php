<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Details</title>
    <link href="{{ asset('css/port.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    
   
</head>
<body>
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio Details</h2>
            </div>
            <div class="row gy-4">
                <div class="col-12">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">
                            @foreach ($item['images'] as $image)
                            <div class="swiper-slide">
                                <img src="{{ asset($image) }}" alt="Portfolio Image">
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Title</strong>: {{ $item['title'] }}</li>
                            <li><strong>Category</strong>: {{ $item['category'] }}</li>
                            <li><strong>Client</strong>: {{ $item['client'] }}</li>
                            <li><strong>Project date</strong>: {{ $item['date'] }}</li>
                            <li><strong>Project URL</strong>: <a href="{{ $item['url'] }}">{{ $item['url'] }}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{ $item['title'] }}</h2>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });
        });
    </script>
</body>
</html>
