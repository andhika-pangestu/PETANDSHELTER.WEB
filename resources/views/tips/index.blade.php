<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PetandShelter | Tips</title>
        <link rel="icon" href="img/icon-trans.png" />
        <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="css/styleTips.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    </head>

<body>
        <!-- Navbar start -->
        <x-navigation></x-navigation>
        <!-- Navbar End -->


<!-- Main Post Section Start -->
<!-- Main Post Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-7 col-xl-8 mt-0" id="main-article">
                @if ($tips->isNotEmpty())
                    @php
                        $latestTip = $tips->shift();
                    @endphp
                    <div class="position-relative overflow-hidden rounded mb-4">
                        <img id="main-article-image" src="{{ Storage::url($latestTip->gambar) }}" class="img-fluid rounded img-zoomin w-100" alt="{{ $latestTip->judul }}" style="object-fit: cover;">
                       
                    </div>
                    <div class="border-bottom py-3">
                        <a id="main-article-title" href="#" class="display-4 text-dark mb-0 link-hover">{{ $latestTip->judul }}</a>
                    </div>
                    <p id="main-article-description" class="mt-3 mb-4">{{ $latestTip->deskripsi }}</p>
                    <p id="main-article-author" class="text-muted">by {{ $latestTip->author->name ?? 'Penulis tidak tersedia' }}</p>
                    <input type="hidden" id="main-article-id" value="{{ $latestTip->id }}">
                @else
                    <p class="text-center">Tidak ada tips yang tersedia.</p>
                @endif
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 pt-0">
                    <div class="row g-4" id="side-articles">
                        @foreach ($tips as $tip)
                            <div class="col-12" data-id="{{ $tip->id }}">
                                <div class="rounded overflow-hidden mb-3">
                                    <a href="/tips/{{ $tip->id }}">
                                        <img src="{{ Storage::url($tip->gambar) }}" class="img-fluid rounded img-zoomin w-100" alt="{{ $tip->judul }}" style="object-fit: cover;">
                                    </a>
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <a href="/tips/{{ $tip->id }}" class="h4 mb-2 small-article">{{ $tip->judul }}</a>
                                    <p class="text-muted">by {{ $tip->author->name ?? 'Penulis tidak tersedia' }}</p>
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

<!-- Latest News Start -->
<div class="container-fluid latest-news py-5 h-100">
    <div class="container py-5 h-100">
        <h2 class="mb-4">Latest Article</h2>
        <div class="latest-news-carousel owl-carousel h-100" id="latest-articles">
            @foreach ($tips as $tip)
                <div class="latest-news-item h-100 d-flex" data-id="{{ $tip->id }}">
                    <div class="bg-light rounded h-100 d-flex flex-column w-100">
                        <div class="rounded-top overflow-hidden">
                            <a href="/tips/{{ $tip->id }}">
                                <img src="{{ Storage::url($tip->gambar) }}" class="img-zoomin img-fluid rounded-top" alt="{{ $tip->judul }}" style="object-fit: cover; width: 100%; height: auto;">
                            </a>
                        </div>
                        <div class="d-flex flex-column p-4 flex-grow-1">
                            <a href="/tips/{{ $tip->id }}" class="h4 tip-title">{{ $tip->judul }}</a>
                            <br>
                            <div class="d-flex justify-content-between mt-auto">
                                @if ($tip->author)
                                    <a href="/tips/{{ $tip->id }}" class="small text-body link-hover">by {{ $tip->author->name }}</a>
                                @else
                                    <span class="small text-body">Penulis tidak tersedia</span>
                                @endif
                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> {{ $tip->created_at->format('M d, Y') }}</small>

                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
<!-- Latest News End -->



    <!-- Footer Start -->
    <x-footer></x-footer>
    <!-- Footer End -->

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".latest-news-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 2000,
            center: false,
            dots: true,
            loop: true,
            margin: 25,
            nav: true,
            navText: [
                '<i class="bi bi-arrow-left"></i>',
                '<i class="bi bi-arrow-right"></i>'
            ],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });

        $('.small-article, .tip-title').click(function(e) {
            e.preventDefault();
            var id = $(this).closest('[data-id]').data('id');
            window.location.href = '/tips/' + id;
        });
    });
</script>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>