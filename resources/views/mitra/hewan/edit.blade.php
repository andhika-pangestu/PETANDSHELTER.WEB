
<div class="container">
    <h1>Edit Hewan</h1>

    <div class="card">
        <div class="card-header">
            <h2>Edit Hewan</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('mitra.hewan.update', $hewan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_hewan">Nama Hewan</label>
                    <input type="text" class="form-control" name="nama_hewan" id="nama_hewan" value="{{ $hewan->nama_hewan }}" required>
                </div>
                <div class="form-group">
                    <label for="jenis_hewan">Jenis Hewan</label>
                    <input type="text" class="form-control" name="jenis_hewan" id="jenis_hewan" value="{{ $hewan->jenis_hewan }}" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                    @if($hewan->foto)
                        <img src="{{ Storage::url($hewan->foto) }}" class="img-thumbnail mt-2" style="width: 150px;" alt="{{ $hewan->nama_hewan }}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" required>{{ $hewan->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status" required>
                        <option value="tersedia" {{ $hewan->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="booking" {{ $hewan->status == 'booking' ? 'selected' : '' }}>Booking</option>
                        <option value="teradopsi" {{ $hewan->status == 'teradopsi' ? 'selected' : '' }}>Teradopsi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kesehatan">Kesehatan</label>
                    <select class="form-control" name="kesehatan" id="kesehatan" required>
                        <option value="sehat" {{ $hewan->kesehatan == 'sehat' ? 'selected' : '' }}>Sehat</option>
                        <option value="sakit" {{ $hewan->kesehatan == 'sakit' ? 'selected' : '' }}>Sakit</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Hewan</button>
            </form>
        </div>
    </div>
</div>

