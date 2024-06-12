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


    </style>
</head>
<body>
    <div class="sidebar">
        @include('mitra.sidebar')
    </div>
    <div class="container" style="margin-top: 100px;">
        
        <div class="row justify-content-center">
            <h1 class="mb-4">{{ isset($hewan) ? 'Edit' : 'Tambah' }} Biodata Hewan</h1>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ isset($hewan) ? 'Edit' : 'Tambah' }} Biodata Hewan</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ isset($hewan) ? route('mitra.hewan.update', $hewan->id) : route('mitra.hewan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($hewan))
                                @method('PUT')
                            @endif
    
                            <div class="form-group mt-4">
                                <label for="nama_hewan">Nama Hewan</label>
                                <input type="text" class="form-control" name="nama_hewan" id="nama_hewan" value="{{ isset($hewan) ? $hewan->nama_hewan : '' }}" required placeholder="Garong SiTampan">
                            </div>
    
                            <div class="form-group mt-4">
                                <label for="jenis_hewan">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_hewan" id="jenis_hewan" required>
                                    <option selected disabled>Silahkan Pilih</option>
                                    <option value="Jantan" {{ isset($hewan) && $hewan->jenis_hewan == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                                    <option value="Betina" {{ isset($hewan) && $hewan->jenis_hewan == 'Betina' ? 'selected' : '' }}>Betina</option>
                                </select>
                            </div>
    
                            <div class="form-group mt-4">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto" accept="image/*">
                            </div>
                            
                            
                            <div class="form-group mt-4">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" required>{{ isset($hewan) ? $hewan->deskripsi : '' }}</textarea>
                                <small id="deskripsiHelp" class="form-text text-muted">Deskripsi minimal 15 kata.</small>
                            </div>
    
                            <div class="form-group mt-4">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status" required>
                                    <option value="tersedia" {{ isset($hewan) && $hewan->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                                </select>
                            </div>
    
                            <div class="form-group mt-4">
                                <label for="kesehatan">Kesehatan</label>
                                <select class="form-control" name="kesehatan" id="kesehatan" required>
                                    <option selected disabled>Silahkan Pilih</option>
                                    <option value="sehat" {{ isset($hewan) && $hewan->kesehatan == 'sehat' ? 'selected' : '' }}>Sehat</option>
                                    <option value="cacat" {{ isset($hewan) && $hewan->kesehatan == 'cacat' ? 'selected' : '' }}>Cacat</option>
                                    <option value="rawat" {{ isset($hewan) && $hewan->kesehatan == 'rawat' ? 'selected' : '' }}>Rawat</option>
                                </select>
                            </div>
    
                            <button type="submit" class="btn btn-primary text-white mt-4">{{ isset($hewan) ? 'Update' : 'Tambah' }} Hewan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Validasi deskripsi minimal 15 kata
        document.getElementById('deskripsi').addEventListener('input', function() {
            var words = this.value.match(/\S+/g).length;
            if (words < 15) {
                this.setCustomValidity('Deskripsi minimal 15 kata.');
            } else {
                this.setCustomValidity('');
            }
        });
    </script>
</body>
</html>
