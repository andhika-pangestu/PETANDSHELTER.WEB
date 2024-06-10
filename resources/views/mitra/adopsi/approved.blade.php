@include('layouts.head')
<div class="container">
    <h1>Daftar Permohonan Adopsi yang Disetujui</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nomor WhatsApp</th>
                <th>Hewan yang Diadopsi</th>
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
                <td>
                    <form action="{{ route('mitra.adopsi.teradopsi', $a) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-primary">Teradopsi</button>
                    </form>
                    <form action="{{ route('mitra.adopsi.cancel', $a) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

