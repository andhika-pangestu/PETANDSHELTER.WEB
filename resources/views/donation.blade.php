<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>donation</title>
        <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">
    </head>
<body>
    <x-navbar></x-navbar>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-lg-4"> <!-- Kolom yang berisi gambar -->
                <img src="images/donation-hero.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
            </div>
            <div class="col-12 col-lg-8"> 
                <h1 class="display-2 fw-bold lh-1 mb-3">AYO  DONASI UNTUK PELIHARAAN DI SHELTER</h1>
                <p class="fst-normal">Mari berdonasi dalam bentuk apapun itu untuk menunjang kehidupan hewan di shelter lebih baik </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ route('donations.create') }}" class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Berdonasi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12 mb-4">
                <div class="card bg-primary text-white rounded-3">
                    <img src="images/shelter.png" class="card-img-top img-fluid  mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-1 fw-bold">DONASI LEWAT DOMPET DIGITAL</h5>
                        <p class="card-text">kamu bisa transfer melalui rekening dibawah ini</p>
                        <a href="{{ route('donations.create') }}" class="btn btn-outline-secondary-50">Ayo berdonasi!</a>
                    </div>
                 </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4 ">
                <div class="card bg-accent-500 rounded-3 ">
                    <div class="card-body ">
                        <h2 class="card-title fw-boldc text-white ">MAU NGIRIM PAKET?</h2>
                        <p class="card-text text-white ">kamu bisa kirim barang untuk kebutuhan shelter ke alamat dibawah ini</p>
                        <p class="card-text ">Agus Wijaya, Jl. Melati No. 45, RT 05/RW 03, Kel. Sukamaju, Kec. Sukasari, Kota Bandung, 40283, Jawa Barat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card bg-accent-200 rounded-3">
                    <div class="card-body m-4 ">
                        <h1 class="card-title text-info-500 fw-bold">MAU JADI VOLUNTEER?</h1>
                        <p class="card-text text-white ">Pelajari lebih lanjut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer> </x-footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
