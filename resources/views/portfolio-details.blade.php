<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Details</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <style>
       
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .portfolio-details {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .portfolio-details .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .portfolio-details .section-title h2 {
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            color: #434175;
        }

        .portfolio-details .section-title h2::after {
            content: '';
            width: 60px;
            height: 3px;
            background: #333;
            display: block;
            margin: 10px auto 0;
        }

        .portfolio-info {
            margin-top: 40px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .portfolio-info h3 {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .portfolio-info ul {
            list-style: none;
            padding: 0;
            font-size: 16px;
        }

        .portfolio-info ul li + li {
            margin-top: 15px;
        }

        .portfolio-info ul li strong {
            color: #333;
        }

        .portfolio-description h2 {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .portfolio-description p {
            padding: 0;
            font-size: 16px;
            line-height: 1.6;
        }

        .portfolio-details-slider .swiper-slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .portfolio-details-slider .swiper-button-prev,
        .portfolio-details-slider .swiper-button-next {
            color: #333;
        }
        
    </style>
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
