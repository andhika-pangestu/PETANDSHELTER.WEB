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
        .sidebar {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 30vh;
            padding-top: 60px; /* Adjust according to sidebar height */
        }
        
    </style>
</head>
<body>
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>


<div class="container">
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>
    <h1>Daftar Permohonan Adopsi yang Menunggu Persetujuan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nomor WhatsApp</th>
                <th>Hewan yang Diadopsi</th>
                <th>Hewan Pertama</th>
                <th>Jenis Rumah</th>
                <th>Alasan Tertarik</th>
                <th>Hewan Lain</th>
                <th>Kepemilikan Rumah</th>
                <th>Lokasi Hewan</th>
                <th>Dokter Hewan</th>
                <th>Halaman Berpagar</th>
                <th>Jumlah Orang Dewasa</th>
                <th>Jumlah Anak</th>
                <th>Alergi Bulu</th>
                <th>Lokasi Hewan Luar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adopsi as $a)
            <tr>
                <td>{{ $a->nama_lengkap }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->nomor_whatsapp }}</td>
                <td>{{ $a->hewan->nama_hewan }} ({{ $a->hewan->jenis_hewan }})</td>
                <td>{{ $a->hewan_pertama }}</td>
                <td>{{ $a->jenis_rumah }}</td>
                <td>{{ $a->alasan_tertarik }}</td>
                <td>{{ $a->hewan_lain }}</td>
                <td>{{ $a->kepemilikan_rumah }}</td>
                <td>{{ $a->lokasi_hewan }}</td>
                <td>{{ $a->dokter_hewan }}</td>
                <td>{{ $a->halaman_berpagar }}</td>
                <td>{{ $a->jumlah_orang_dewasa }}</td>
                <td>{{ $a->jumlah_anak }}</td>
                <td>{{ $a->alergi_bulu }}</td>
                <td>{{ $a->lokasi_hewan_luar }}</td>
                <td>
                    <form action="{{ route('mitra.adopsi.approve', $a) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-success">Setujui</button>
                    </form>
                    <form action="{{ route('mitra.adopsi.reject', $a) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Tolak</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

