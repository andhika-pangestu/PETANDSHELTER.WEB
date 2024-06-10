@include('layouts.head')

<div class="container">
    @include('mitra.sidebar')
    <h1>{{ isset($shelter) ? 'Edit' : 'Buat' }} Shelter</h1>

    <form action="{{ isset($shelter) ? route('mitra.shelter.update', $shelter->id) : route('mitra.shelter.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($shelter))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>
        <div class="form-group">
            <label for="nama_shelter">Nama Shelter</label>
            <input type="text" class="form-control" name="nama_shelter" id="nama_shelter" value="{{ isset($shelter) ? $shelter->nama_shelter : '' }}" required>
        </div>
        <div class="form-group">
            <label for="alamat_jalan">Alamat Jalan</label>
            <input type="text" class="form-control" name="alamat_jalan" id="alamat_jalan" value="{{ isset($shelter) ? $shelter->alamat_jalan : '' }}" required>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" class="form-control" name="kota" id="kota" value="{{ isset($shelter) ? $shelter->kota : '' }}" required>
        </div>
        <div class="form-group">
            <label for="jam_buka">Jam Buka</label>
            <input type="time" class="form-control" name="jam_buka" id="jam_buka" value="{{ isset($shelter) ? $shelter->jam_buka : '' }}" required>
        </div>
        <div class="form-group">
            <label for="hari_buka">Hari Buka</label>
            <input type="text" class="form-control" name="hari_buka" id="hari_buka" value="{{ isset($shelter) ? $shelter->hari_buka : '' }}" required>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" value="{{ isset($shelter) ? $shelter->nomor_telepon : '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($shelter) ? 'Update' : 'Buat' }} Shelter</button>
    </form>
</div>

