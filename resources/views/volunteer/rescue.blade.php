<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet and Shelter</title>
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/styleDashboard.css') }}">
    <link rel="stylesheet" href="css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
@include('volunteer.sidebar')
<div class="card" style="margin: 6em; z-index: -10;">
    <h5 class="card-header">HI</h5>
    <div class="card-body">
      <p class="card-text lh-lg">DESkripsi</p>
    </div>

    <div class="justify-content-start">
            <div class="d-flex p-5">
                <div  style="width: 300px; height: 300px; overflow: hidden;">
                    <img src="" class="img-fluid">
                </div>
                <div class="ms-5 ">
                    <h4 class="fw-bold mb-4">NAMA</h4>
                    <div class="d-flex align-items-center mb-3">
                    <p class="mb-0">Jenis Kelamin: Jantan</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <p class="mb-0">Warna: Putih-Abu Dominan</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <p class="mb-0">Umur: 5 Tahun</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <p class="mb-0">Vaksin: Belum Vaksin</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <p class="mb-0">Kesehatan:</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <p class="mb-0">Lokasi: , </p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <p class="mb-0">Status: </p>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>