<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet and Shelter</title>
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
@include('admin.sidebar')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-3">Jadwal Acara</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('admin.acara.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="waktu" class="form-label">Waktu</label>
                    <input type="time" class="form-control" id="waktu" name="waktu" required>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

            <div class="row mt-5">
                @foreach ($acara as $item)
                    <div class="col-12 col-md-6 col-lg-4 my-3">
                        <div class="card h-100">
                            <img src="{{ Storage::url($item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->deskripsi }}</p>
                                <p class="card-text"><small class="text-muted">{{ $item->tanggal }} • {{ $item->waktu }}</small></p>
                                <button class="btn btn-warning" onclick="editAcara({{ $item }})">Edit</button>
                                <form action="{{ route('admin.acara.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    function editAcara(acara) {
        document.getElementById('judul').value = acara.judul;
        document.getElementById('deskripsi').value = acara.deskripsi;
        document.getElementById('tanggal').value = acara.tanggal;
        document.getElementById('waktu').value = acara.waktu;
        document.getElementById('lokasi').value = acara.lokasi;
        document.getElementById('form').action = '/admin/acara/' + acara.id;
        document.getElementById('method').value = 'PUT';
    }
</script>

