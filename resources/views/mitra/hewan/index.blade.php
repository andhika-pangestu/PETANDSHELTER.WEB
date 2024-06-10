@include('layouts.head')
<div class="container">
    <h1>Daftar Hewan</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <a href="{{ route('mitra.hewan.create') }}" class="btn btn-primary mb-3">Tambah Hewan</a>
    
    <div class="row">
        @foreach($hewan as $item)
        <div class="col-md-4">
            <div class="card mb-3" style="width: 18rem;">
                <img src="{{ Storage::url($item->foto) }}" class="card-img-top" alt="{{ $item->nama_hewan }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama_hewan }}</h5>
                    <p class="card-text">
                        <strong>Jenis:</strong> {{ $item->jenis_hewan }}<br>
                        <strong>Status:</strong> {{ $item->status }}<br>
                        <strong>Kesehatan:</strong> {{ $item->kesehatan }}<br>
                        <strong>Deskripsi:</strong> {{ $item->deskripsi }}
                    </p>
                    <a href="{{ route('mitra.hewan.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('mitra.hewan.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus hewan ini?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

