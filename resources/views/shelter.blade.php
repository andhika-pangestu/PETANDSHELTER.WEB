<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetandShelter | Shelter Detail</title>
    <link rel="icon" href="/img/icon-trans.png" />
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
{{-- navbar --}}
<x-navigation></x-navigation>

{{-- section1 --}}
<div class="container mt-3">
    <div class="row">
        <div class="col-12 d-flex align-items-center mt-3 mb-5">
            <!-- Tombol Back di Kiri -->
            <a href="/shelter"><button onclick="history.back()" class="btn btn-light">
                <i class="fas fa-arrow-left fa-xl"></i>
            </button></a>
            <!-- Breadcrumb di Kanan -->
            <nav aria-label="breadcrumb" class="ms-auto">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/shelter" class="text-decoration-none">Shelter</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $shelter->nama_shelter }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero -->
    <div class="justify-content-start">
        <div class="p-5 shadow-4 bg-accent-500 rounded-4">
            <div class="d-flex">
                <div>
                    <img src="{{ asset('uploads/' . $shelter->foto) }}" alt="Foto Shelter" class="img-thumbnail img-fluid" style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <div class="ms-5 text-white">
                    <h4 class="fw-bold mb-4">{{ $shelter->nama_shelter }}</h4>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-map-location-dot fa-lg me-2"></i>
                        <p class="mb-0">{{ $shelter->alamat_jalan }}, {{ $shelter->kota }}</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-calendar-days fa-lg me-2"></i>
                        <p class="mb-0">{{ $shelter->hari_buka }}: {{ $shelter->jam_buka }}</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-phone-volume fa-lg me-2"></i>
                        <p class="mb-0">{{ $shelter->nomor_telepon }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero -->

    {{-- section2 --}}
    <div class="row justify-content-center mt-5">
        @foreach($shelter->hewan as $hewan)
        <div class="col-md-3 my-4 mx-4">
            <div class="card cardpet text-white">
                <img src="{{ Storage::url($hewan->foto) }}" class="card-img">
                <div class="card-img-overlay">
                    <div class="adoption-button" onclick="redirectToAdoptionPage({{ $hewan->id }})">ADOPSI</div>     
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- section3 --}}
    <div class="row my-5">
        <div class="col-md-2">
            <h5 class="text-white bg-accent-500 p-3 rounded-end-4">Shelter lainnya</h5>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        {{-- @foreach($shelters as $otherShelter)
        <div class="col">
            <div class="card h-100 rounded-4">
                <img src="{{ asset('uploads/' . $otherShelter->foto) }}" class="card-img-top img-fluid rounded-top-4 h-100" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $otherShelter->nama_shelter }}</h5>
                    <h6 class="card-title">{{ $otherShelter->alamat_jalan }}, {{ $otherShelter->kota }}</h6>
                    <p class="card-text">{{ $otherShelter->hari_buka }}: {{ $otherShelter->jam_buka }}</p>
                    <a href="{{ route('shelter.show', $otherShelter->id) }}" class="btn btn-accent text-white">Lihat Shelter</a>
                </div>
            </div>
        </div>
        @endforeach --}}
        @foreach ($shelters as $otherShelter)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-4 d-flex justify-content-center card-container">
            <div class="card shadow-shelter rounded-4 card-shelter text-sky-900" style="max-width: 18rem; padding:15px;">
                <img src="{{ asset('uploads/' . $otherShelter->foto) }}" class="card-img-top rounded" alt="..."
                    style="height: 200px; object-fit: cover; image-rendering: auto;">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $otherShelter->nama_shelter }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-solid fa-location-dot"
                            style="margin-right: 5px;"></i>{{ $otherShelter->alamat_jalan }}, {{ $otherShelter->kota }}</li>
                    <li class="list-group-item"><i class="fa-solid fa-road "
                            style="margin-right: 5px;"></i>{{ $otherShelter->hari_buka }}: {{ $otherShelter->jam_buka }}</li>
                </ul>
                <div class="d-flex justify-content-start mt-2 ps-2 py-2">
                    <a href="{{ route('shelter.show', $otherShelter->id) }}" class="btn btn-secondary">Shelter Page</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

{{-- footer --}}
<x-footer></x-footer>

<script>
    function redirectToAdoptionPage(hewanId) {
        window.location.href = "/adopsi/" + hewanId + "/create";
    }
</script>
</body>
</html>
