<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetandShelter | Tips</title>
    <link rel="icon" href="img/icon-trans.png" />
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/styleTips.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            background-color: #f8f9fa;
        }

        .main-article img {
            object-fit: cover;
            height: 400px;
        }

        .main-article {
            border-radius: 10px;
            overflow: hidden;
        }

        .main-article-title {
            font-size: 2rem;
            color: #343a40;
        }

        .main-article-description {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .author-info {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-radius: 10px;
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.2rem;
            color: #343a40;
        }

        .card-body {
            padding: 1.5rem;
        }

        .owl-nav i {
            font-size: 30px;
            color: #343a40;
        }

        .latest-news-carousel .item {
            padding: 10px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            padding: 10px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .carousel-indicators li {
            background-color: #343a40;
        }

        .carousel-indicators .active {
            background-color: #007bff;
        }
    </style>
</head>

<body>
    <!-- Navbar start -->
    <x-navigation></x-navigation>
    <!-- Navbar End -->

    <!-- Main Post Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Main Article Section -->
                <div class="col-lg-8 main-article">
                    @if ($tips->isNotEmpty())
                        @php
                            $latestTip = $tips->shift();
                        @endphp
                        <div class="position-relative mb-4">
                            <img src="{{ Storage::url($latestTip->gambar) }}" class="img-fluid rounded w-100"
                                alt="{{ $latestTip->judul }}">
                            <div class="position-absolute bottom-0 start-0 p-3">
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute read</a>
                            </div>
                        </div>
                        <div class="border-bottom py-3">
                            <a href="#" class="main-article-title">{{ $latestTip->judul }}</a>
                        </div>
                        <p class="main-article-description">{{ $latestTip->deskripsi }}</p>
                        <p class="author-info">by {{ $latestTip->author->name ?? 'Penulis tidak tersedia' }}</p>
                    @else
                        <p class="text-center">Tidak ada tips yang tersedia.</p>
                    @endif
                </div>

                <!-- Side Articles Section -->
                <div class="col-lg-4">
                    <div class="bg-light rounded p-4 pt-0">
                        <div class="row g-4">
                            @foreach ($tips as $tip)
                                <div class="col-12">
                                    <div class="card">
                                        <a href="/tips/{{ $tip->id }}">
                                            <img src="{{ Storage::url($tip->gambar) }}" class="card-img-top" alt="{{ $tip->judul }}">
                                        </a>
                                        <div class="card-body">
                                            <a href="/tips/{{ $tip->id }}" class="card-title">{{ $tip->judul }}</a>
                                            <p class="author-info">by {{ $tip->author->name ?? 'Penulis tidak tersedia' }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Post Section End -->
<!-- Latest News Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h2 class="mb-4">Latest Articles</h2>

        <!-- Carousel Wrapper -->
        <div id="latest-articles" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($tips->chunk(3) as $chunkedTips)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row g-4">
                            @foreach ($chunkedTips as $tip)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100">
                                        <a href="/tips/{{ $tip->id }}">
                                            <img src="{{ Storage::url($tip->gambar) }}" class="card-img-top" alt="{{ $tip->judul }}" style="object-fit: cover; height: 200px;">
                                        </a>
                                        <div class="card-body d-flex flex-column">
                                            <a href="/tips/{{ $tip->id }}" class="card-title h5 mb-2">{{ $tip->judul }}</a>
                                            <p class="author-info small text-muted mb-3">by {{ $tip->author->name ?? 'Penulis tidak tersedia' }}</p>
                                            <small class="text-muted"><i class="fas fa-calendar-alt me-1"></i>{{ $tip->created_at->format('M d, Y') }}</small>
                                            <div class="mt-auto">
                                                <a href="/tips/{{ $tip->id }}" class="btn btn-primary mt-3 w-100">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Slide Buttons Outside the Carousel -->
        <div class="d-flex justify-content-between mt-4">
            <button class="btn btn-light" type="button" data-bs-target="#latest-articles" data-bs-slide="prev">
                <i class="bi bi-chevron-left"></i> Prev
            </button>
            <button class="btn btn-light" type="button" data-bs-target="#latest-articles" data-bs-slide="next">
                Next <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</div>
<!-- Latest News Section End -->

<!-- Custom Styling for the Carousel -->
<style>
    /* Customize carousel controls */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #000; /* Black arrows */
        width: 20px;  /* Smaller arrow size */
        height: 20px;
        border-radius: 50%;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); /* Slight shadow */
    }

    .carousel-control-prev,
    .carousel-control-next {
        background-color: rgba(255, 255, 255, 0.7); /* Transparent background */
        border-radius: 50%;
        border: none;
        padding: 8px; /* Smaller padding */
    }

    /* Hover effect for carousel controls */
    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background-color: rgba(255, 255, 255, 0.9);
    }

    /* Optional: Customize card images */
    .card-img-top {
        object-fit: cover;
        height: 200px;
    }
</style>

<!-- Bootstrap 5 and Required JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // JavaScript for Carousel Slide functionality
        const prevButton = document.querySelector('[data-bs-slide="prev"]');
        const nextButton = document.querySelector('[data-bs-slide="next"]');
        
        prevButton.addEventListener('click', function() {
            const carousel = document.getElementById('latest-articles');
            const carouselInstance = new bootstrap.Carousel(carousel);
            carouselInstance.prev();
        });

        nextButton.addEventListener('click', function() {
            const carousel = document.getElementById('latest-articles');
            const carouselInstance = new bootstrap.Carousel(carousel);
            carouselInstance.next();
        });
    });
</script>







</body>

</html>
