<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet and Shelter</title>
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .sidebar {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
    </style>
</head>
<body>
<div class="sidebar">
    @include('mitra.sidebar')
</div>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; flex-direction: column;">
   
    
    @if(session('warning'))
        <div class="alert alert-warning text-start w-100">
            {{ session('warning') }}
        </div>
    @endif
    
    @if ($shelter)
    {{ $shelter->foto }}
    <h1 class="card-title mb-4">{{ $shelter->nama_shelter }}</h1>
        <div class="card w-100" style="max-width: 600px;">
            
            
            <div class="card-body text-start">
                <p><strong>Alamat:</strong> {{ $shelter->alamat_jalan }}, {{ $shelter->kota }}</p>
                <p><strong>Jam Buka:</strong> {{ $shelter->jam_buka }}</p>
                <p><strong>Hari Buka:</strong> {{ $shelter->hari_buka }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $shelter->nomor_telepon }}</p>
                <a href="{{ route('mitra.shelter.edit', $shelter->id) }}" class="btn btn-primary-700">Edit Shelter</a>
            </div>
        </div>
    @else
        <p class="text-start w-100">Anda belum memiliki shelter. <a href="{{ route('mitra.shelter.create') }}">Buat Shelter</a></p>
    @endif
</div>

<script src="script.js"></script>
</body>
</html>
