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
    <link rel="stylesheet" href="../css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
        }
        .sidebar {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        .container {
            margin-top: 100px; /* Adjust according to the height of the sidebar */
            padding: 20px;
        }
        .btn {
            margin-right: 5px;
        }
        .card-img-top {
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        @include('admin.sidebar')
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-3">Jadwal Acara</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form id="form" action="{{ route('admin.acara.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" id="method" value="POST">
                    <input type="hidden" name="id" id="id">
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
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
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
                    <button type="submit" class="btn btn-success-700 text-white">Simpan</button>
                </form>

                <div class="row mt-5">
                    @foreach ($acara as $item)
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <div class="card h-100">
                                <img src="{{ Storage::url($item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->judul }}</h5>
                                    <p class="card-text">
                                        <span class="short-description">{{ \Illuminate\Support\Str::words($item->deskripsi, 30, '') }}</span>
                                        <span class="full-description d-none">{{ $item->deskripsi }}</span>
                                        @if (str_word_count($item->deskripsi) > 30)
                                            ... <a href="#" class="text-decoration-none read-more" onclick="toggleDescription(event, true)">Baca Selengkapnya</a>
                                            <a href="#" class="text-decoration-none read-less d-none" onclick="toggleDescription(event, false)">Tutup</a>
                                        @endif
                                    </p>
                                    <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($item->tanggal)->format('l, d F Y') }} • {{ \Carbon\Carbon::parse($item->waktu)->format('H:i') }}</small></p>
                                    <p class="card-text"><small class="text-muted">Lokasi: {{ $item->lokasi }}</small></p>
                                    <button class="btn btn-info-700" onclick="editAcara({{ json_encode($item) }})">Edit</button>
                                    <form action="{{ route('admin.acara.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger-700">Hapus</button>
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
        function toggleDescription(event, showFull) {
            event.preventDefault();
            const link = event.target;
            const cardBody = link.closest('.card-body');
            const shortDescription = cardBody.querySelector('.short-description');
            const fullDescription = cardBody.querySelector('.full-description');
            const readMoreLink = cardBody.querySelector('.read-more');
            const readLessLink = cardBody.querySelector('.read-less');

            if (showFull) {
                shortDescription.classList.add('d-none');
                fullDescription.classList.remove('d-none');
                readMoreLink.classList.add('d-none');
                readLessLink.classList.remove('d-none');
            } else {
                shortDescription.classList.remove('d-none');
                fullDescription.classList.add('d-none');
                readMoreLink.classList.remove('d-none');
                readLessLink.classList.add('d-none');
            }
        }

        function editAcara(acara) {
            document.getElementById('id').value = acara.id;
            document.getElementById('judul').value = acara.judul;
            document.getElementById('deskripsi').value = acara.deskripsi;
            document.getElementById('tanggal').value = acara.tanggal;
            document.getElementById('waktu').value = acara.waktu;
            document.getElementById('lokasi').value = acara.lokasi;
            document.getElementById('form').action = '/admin/acara/' + acara.id;
            document.getElementById('method').value = 'PUT';

            // If image input needs to be cleared (optional)
            document.getElementById('gambar').value = "";
        }
    </script>
</body>
</html>
