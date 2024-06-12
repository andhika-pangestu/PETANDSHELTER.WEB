@include('layouts.head')

<div class="container">
    <h1>Daftar Hewan Teradopsi</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Hewan</th>
                <th>Jenis Hewan</th>
                <th>Deskripsi</th>
                <th>Status Kesehatan</th>
                <th>Nama Adopter</th>
                <th>Email Adopter</th>
                <th>Alamat Adopter</th>
                <th>Nomor WhatsApp</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hewanTeradopsi as $hewan)
            <tr>
                <td>{{ $hewan->nama_hewan }}</td>
                <td>{{ $hewan->jenis_hewan }}</td>
                <td>{{ $hewan->deskripsi }}</td>
                <td>{{ $hewan->kesehatan }}</td>
                <td>{{ $hewan->nama_lengkap }}</td>
                <td>{{ $hewan->email }}</td>
                <td>{{ $hewan->alamat }}</td>
                <td>{{ $hewan->nomor_whatsapp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
