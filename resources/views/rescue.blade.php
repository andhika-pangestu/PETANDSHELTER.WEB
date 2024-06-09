<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rescue</title>
        <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/rescue.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">

    </head>
<body>
    <x-navbar></x-navbar>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 pt-0">
            <div class="col-12 col-lg-4"> <!-- Kolom yang berisi gambar -->
                <img src="images/RescueHeroes.png" class="d-block mx-lg-auto" alt="Bootstrap Themes" height="300" loading="lazy">
                {{-- statistic hero --}}
                <div class="row align-items-end g-4 pt-1 "style="margin-top: -50px;" >
                    <div class="col-sm-6 mb-3 mb-sm-0 ">
                        <div class="container-sm">
                            <div class="card border-0 shadow-sm shadow-primary rounded-4">
                                <div class="card-body text-center">
                                    <h1 class="card-title text-primary fw-bold mb-0"style="font-size: 1.7em !important;">100+</h1>
                                    <p class="card-content fs-5 fw-bold text-primary mb-0"style="font-size: 0.8em !important;">Volunteer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card border-0 shadow shadow-primary rounded-4">
                            <div class="card-body text-center">
                                <h1 class="card-title text-primary fw-bold mb-0" >150+</h1>
                                <p class="card-content fs-5 fw-bold text-primary mb-0 ">Rescued Pet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8"> <!-- Kolom yang berisi teks -->
                <h1 class="display-2 fw-bold lh-1 mb-3">Rescuing Animal Is What We Aspire to Do</h1>
                <p class="fst-normal">Hubungi kami ketika kamu menemukan hewan disekitarmu yang membutuhkan pertolongan.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#}" class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>