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
    <link rel="stylesheet" href="/css/styleDashboard.css">
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

<div class="container">
    <div class="card-body text-start">
        <h1>{{ isset($shelter) ? 'Edit' : 'Buat' }} Shelter</h1>

        <form action="{{ isset($shelter) ? route('mitra.shelter.update', $shelter->id) : route('mitra.shelter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($shelter))
                @method('PUT')
            @endif
    
            <div class="form-group mt-4">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>
            <div class="form-group mt-4">
                <label for="nama_shelter">Nama Shelter</label>
                <input type="text" class="form-control" name="nama_shelter" id="nama_shelter" value="{{ isset($shelter) ? $shelter->nama_shelter : '' }}" required>
            </div>
            <div class="form-group mt-4">
                <label for="alamat_jalan">Alamat Jalan</label>
                <input type="text" class="form-control" name="alamat_jalan" id="alamat_jalan" value="{{ isset($shelter) ? $shelter->alamat_jalan : '' }}" required>
            </div>
            <div class="form-group mt-4">
                <label for="kota">Kota</label>
                <input type="text" class="form-control" name="kota" id="kota" value="{{ isset($shelter) ? $shelter->kota : '' }}" required>
            </div>
            <div class="form-group mt-4">
                <label for="jam_buka">Jam Buka</label>
                <input type="time" class="form-control" name="jam_buka" id="jam_buka" value="{{ isset($shelter) ? $shelter->jam_buka : '' }}" required>
            </div>
            <div class="form-group mt-4">
                <label for="hari_buka">Hari Buka</label>
                <input type="text" class="form-control" name="hari_buka" id="hari_buka" value="{{ isset($shelter) ? $shelter->hari_buka : '' }}" required>
            </div>
            <div class="form-group mt-4">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" value="{{ isset($shelter) ? $shelter->nomor_telepon : '' }}" required>
            </div>
    
            <button type="submit" class="btn btn-primary mt-4 text-white">{{ isset($shelter) ? 'Update' : 'Buat' }} Shelter</button>
        </form>
    </div>
    </div>
    

</body>
</html>