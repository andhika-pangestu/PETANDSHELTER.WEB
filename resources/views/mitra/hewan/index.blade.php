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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <style>
        .sidebar {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding-top: 60px; /* Adjust according to sidebar height */
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>
    <div class="container">
        <h1>Daftar Hewan</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @foreach($hewan as $item)
            <div class="col-md-4">
                <div class="card mb-3" style="width: 18rem;">
                    <img src="{{ Storage::url($item->foto) }}" class="card-img-top" alt="{{ $item->nama_hewan }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_hewan }}</h5>
                        <p class="card-text">
                            <strong>Jenis:</strong> {{ $item->jenis_hewan }}<br>
                            <strong>Status:</strong> {{ $item->status }}<br>
                            <strong>Kesehatan:</strong> {{ $item->kesehatan }}<br>
                            <strong>Deskripsi:</strong> {{ $item->deskripsi }}
                        </p>
                        <a href="{{ route('mitra.hewan.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('mitra.hewan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus hewan ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Tombol Tambah Hewan dipindahkan ke bawah -->
        <div class="mt-3">
            <a href="{{ route('mitra.hewan.create') }}" class="btn btn-primary">Tambah Hewan</a>
        </div>
    </div>

    <!-- Tambahkan JS yang diperlukan di sini -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
</body>
</html>
