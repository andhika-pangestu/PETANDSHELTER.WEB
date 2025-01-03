<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet and Shelter</title>

    <link rel="icon" href="img/icon-trans.png" />

    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <style>
        body {
            
            font-family: Helvetica, sans-serif;
            margin: 0;


        .container-fluid {
            margin-left: 250px;
            margin-top: 20px;
            padding-top: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .alert {
            margin-bottom: 20px;
        }

        .my-3 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
        }

        .btn-success-400 {
            background-color: #28a745;
        }

        .btn-info-400 {
            background-color: #17a2b8;
        }

        .btn-danger-400 {
            background-color: #dc3545;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
        }

        .card-text {
            font-size: 14px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .col-md-3 {
            width: calc(25% - 20px);
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            .col-md-3 {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .col-md-3 {
                width: 100%;
            }

            .container-fluid {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>

    <div class="container-fluid">
        <h1>Daftar Hewan</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="my-3">
            <a href="{{ route('mitra.hewan.create') }}" class="btn btn-success-400">Tambah Hewan</a>
        </div>
        <div class="row">
            @foreach($hewan as $item)
            <div class="col-md-3 my-3">
                <div class="card mb-3 h-100">
                    <img src="{{ Storage::url($item->foto) }}" alt="{{ $item->nama_hewan }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_hewan }}</h5>
                        <p class="card-text">
                            <strong>Jenis:</strong> {{ $item->jenis_hewan }}<br>
                            <strong>Status:</strong> {{ $item->status }}<br>
                            <strong>Kesehatan:</strong> {{ $item->kesehatan }}<br>
                            <strong>Deskripsi:</strong> {{ $item->deskripsi }}
                        </p>

                        <a href="{{ route('mitra.hewan.edit', $item->id) }}" class="btn btn-info-400">Edit</a>
                        <form action="{{ route('mitra.hewan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger-400" onclick="return confirm('Apakah Anda yakin ingin menghapus hewan ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
</body>
</html>
