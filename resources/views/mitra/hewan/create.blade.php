@include('layouts.head')
<div class="container">
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
                    <label for="jenis_hewan">Jenis Hewan</label>
                    <input type="text" class="form-control" name="jenis_hewan" id="jenis_hewan" value="{{ isset($hewan) ? $hewan->jenis_hewan : '' }}" required>
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