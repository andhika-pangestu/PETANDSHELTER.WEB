@include('layouts.head')


<div class="container">
    <h1>Daftar Permohonan Adopsi</h1>

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
                <th>Status</th>
                <th>Aksi</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adopsi as $a)
            <tr>
                <td>{{ $a->nama_lengkap }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->nomor_whatsapp }}</td>
                <td>{{ $a->hewan->nama_hewan }} ({{ $a->hewan->jenis_hewan }})</td>
                <td>{{ ucfirst($a->status) }}</td>
                <td>
                    @if($a->status == 'pending')
                        <form action="{{ route('mitra.adopsi.approve', $a) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-success">Setujui</button>
                        </form>
                        <form action="{{ route('mitra.adopsi.reject', $a) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Tolak</button>
                        </form>
                    @elseif($a->status == 'approved')
                        <form action="{{ route('mitra.adopsi.teradopsi', $a) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-primary">Teradopsi</button>
                        </form>
                        <form action="{{ route('mitra.adopsi.cancel', $a) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-warning">Cancel</button>
                        </form>
                    @elseif($a->status == 'canceled')
                        <form action="{{ route('mitra.adopsi.approve', $a) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-success">Setujui Lagi</button>
                        </form>
                    @else
                        {{ ucfirst($a->status) }}
                    @endif
                </td>
                <td>
                    <button class="btn btn-info" data-bs-toggle="collapse" data-bs-target="#details-{{ $a->id }}">Detail</button>
                </td>
            </tr>
            <tr class="collapse" id="details-{{ $a->id }}">
                <td colspan="8">
                    <div class="card card-body">
                        <p><strong>Hewan Pertama:</strong> {{ $a->hewan_pertama }}</p>
                        <p><strong>Jenis Rumah:</strong> {{ $a->jenis_rumah }}</p>
                        <p><strong>Alasan Tertarik:</strong> {{ $a->alasan_tertarik }}</p>
                        <p><strong>Hewan Lain:</strong> {{ $a->hewan_lain }}</p>
                        <p><strong>Kepemilikan Rumah:</strong> {{ $a->kepemilikan_rumah }}</p>
                        <p><strong>Lokasi Hewan:</strong> {{ $a->lokasi_hewan }}</p>
                        <p><strong>Dokter Hewan:</strong> {{ $a->dokter_hewan }}</p>
                        <p><strong>Halaman Berpagar:</strong> {{ $a->halaman_berpagar }}</p>
                        <p><strong>Jumlah Orang Dewasa:</strong> {{ $a->jumlah_orang_dewasa }}</p>
                        <p><strong>Jumlah Anak:</strong> {{ $a->jumlah_anak }}</p>
                        <p><strong>Alergi Bulu:</strong> {{ $a->alergi_bulu }}</p>
                        <p><strong>Lokasi Hewan Luar:</strong> {{ $a->lokasi_hewan_luar }}</p>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

