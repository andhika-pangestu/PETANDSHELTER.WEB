<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet and Shelter</title>
    <link rel="icon" href="img/icon-trans.png" />
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .sidebar {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        .container {
            margin-top: 80px; /* Adjust according to sidebar height */
        }
        table {
            width: 100%;
            font-size: 1.2em; /* Increase font size */
        }
        th {
            white-space: nowrap; /* Prevent line breaks in headers */
        }
        td {
            max-height: 3em; /* Adjust based on line height */
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Limit to 2 lines */
            -webkit-box-orient: vertical;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>
    <h1 class="text-center mb-4">Daftar Permohonan Adopsi yang Menunggu Persetujuan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered text-center">
            <thead class="table-primary">
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
                        <form action="{{ route('mitra.adopsi.approve', $a) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                        </form>
                        <form action="{{ route('mitra.adopsi.reject', $a) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
