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
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>
    <h1>{{ isset($hewan) ? 'Edit' : 'Tambah' }} Hewan</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ isset($hewan) ? 'Edit' : 'Tambah' }} Hewan</h2>
        </div>
        <div class="card-body">
            <form action="{{ isset($hewan) ? route('mitra.hewan.update', $hewan->id) : route('mitra.hewan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($hewan))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="nama_hewan">Nama Hewan</label>
                    <input type="text" class="form-control" name="nama_hewan" id="nama_hewan" value="{{ isset($hewan) ? $hewan->nama_hewan : '' }}" required>
                </div>
                <div class="form-group">
                    <label for="jenis_hewan">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_hewan" id="jenis_hewan" required>
                        <option value="Jantan" {{ isset($hewan) && $hewan->jenis_hewan == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                        <option value="Betina" {{ isset($hewan) && $hewan->jenis_hewan == 'Betina' ? 'selected' : '' }}>Betina</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" required>{{ isset($hewan) ? $hewan->deskripsi : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status" required>
                        <option value="tersedia" {{ isset($hewan) && $hewan->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="booking" {{ isset($hewan) && $hewan->status == 'booking' ? 'selected' : '' }}>Booking</option>
                        <option value="teradopsi" {{ isset($hewan) && $hewan->status == 'teradopsi' ? 'selected' : '' }}>Teradopsi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kesehatan">Kesehatan</label>
                    <select class="form-control" name="kesehatan" id="kesehatan" required>
                        <option value="sehat" {{ isset($hewan) && $hewan->kesehatan == 'sehat' ? 'selected' : '' }}>Sehat</option>
                        <option value="sakit" {{ isset($hewan) && $hewan->kesehatan == 'sakit' ? 'selected' : '' }}>Sakit</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($hewan) ? 'Update' : 'Tambah' }} Hewan</button>
            </form>
        </div>
    </div>
</div>
<script src="script.js"></script>