<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>employees</title>
        <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <x-navbar></x-navbar>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-lg-4"> <!-- Kolom yang berisi gambar -->
                <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-12 col-lg-8"> <!-- Kolom yang berisi teks -->
                <h1 class="display-2 fw-bold lh-1 mb-3">Berikan Cinta dan Bangun kebahagiaan</h1>
                <p class="lead">Temukan sahabat sejati Anda dan berikan mereka kehidupan penuh kasih dengan mengadopsi hewan peliharaan yang membutuhkan rumah. Bergabunglah dengan kami untuk mendukung perlindungan hewan atau menjadi relawan hari ini, dan buat perbedaan nyata dalam kehidupan mereka..</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Primary</button>
                    <button type="button" class="btn btn-outline-secondary-500 btn-lg px-4">Default</button>
                </div>
            </div>
        </div>
    </div>
    
    

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
