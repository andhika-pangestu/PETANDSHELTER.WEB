
<div class="container">
    <h1>Shelter Saya</h1>
    @if ($shelter)
        <div class="card">
            <div class="card-header">{{ $shelter->nama_shelter }}</div>
            <div class="card-body">
                <p><strong>Alamat:</strong> {{ $shelter->alamat_jalan }}, {{ $shelter->kota }}</p>
                <p><strong>Jam Buka:</strong> {{ $shelter->jam_buka }}</p>
                <p><strong>Hari Buka:</strong> {{ $shelter->hari_buka }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $shelter->nomor_telepon }}</p>
                <a href="{{ route('mitra.shelter.edit', $shelter->id) }}" class="btn btn-primary">Edit Shelter</a>
            </div>
        </div>
    @else
        <p>Anda belum memiliki shelter. <a href="{{ route('mitra.shelter.create') }}">Buat Shelter</a></p>
    @endif
</div>

<div class="container">
    <h1>Shelter Saya</h1>
    
    @if(session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
    
    @if ($shelter)
        <div class="card">
            <div class="card-header">{{ $shelter->nama_shelter }}</div>
            <div class="card-body">
                <p><strong>Alamat:</strong> {{ $shelter->alamat_jalan }}, {{ $shelter->kota }}</p>
                <p><strong>Jam Buka:</strong> {{ $shelter->jam_buka }}</p>
                <p><strong>Hari Buka:</strong> {{ $shelter->hari_buka }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $shelter->nomor_telepon }}</p>
                <a href="{{ route('mitra.shelter.edit', $shelter->id) }}" class="btn btn-primary">Edit Shelter</a>
            </div>
        </div>
    @else
        <p>Anda belum memiliki shelter. <a href="{{ route('mitra.shelter.create') }}">Buat Shelter</a></p>
    @endif