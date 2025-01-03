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
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .sidebar {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
            background-color: #343a40;
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container {
            margin-top: 80px;
            padding: 20px;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow-x: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }
        table {
            table-layout: auto;
            word-wrap: break-word;
        }
        th, td {
            text-align: center;
            vertical-align: middle;
            white-space: nowrap;
        }
        th {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>
    <div class="container">
        <h1>Daftar Permohonan Adopsi yang Disetujui</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-bordered">
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
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($approvedAdopsi as $a)
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
                    <td>{{ ucfirst($a->status) }}</td>
                    <td>
                        @if($a->status == 'approved')
                            <form action="{{ route('mitra.adopsi.teradopsi', $a) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Teradopsi</button>
                            </form>
                            <form action="{{ route('mitra.adopsi.cancel', $a) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">Cancel</button>
                            </form>
                        @elseif($a->status == 'canceled')
                            <form action="{{ route('mitra.adopsi.approve', $a) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Setujui Lagi</button>
                            </form>
                        @else
                            {{ ucfirst($a->status) }}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
