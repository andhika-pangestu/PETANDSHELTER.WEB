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
                <th>Hewan Pertama</th>
                <th>Jenis Rumah</th>
                <th>Alasan Tertarik</th>
                <th>Hewan Lain</th>
                <th>Kepemilikan Rumah</th>
                <th>Lokasi Hewan</th>
                <th>Dokter Hewan</th>
                <th>Halaman Berpagar</th>
                <th>Jumlah Orang Dewasa</th>
                <th>Jumlah Anak</th>
                <th>Alergi Bulu</th>
                <th>Lokasi Hewan Luar</th>
                <th>Status</th>
                <th>Aksi</th>
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
                <td>{{ $a->hewan_pertama }}</td>
                <td>{{ $a->jenis_rumah }}</td>
                <td>{{ $a->alasan_tertarik }}</td>
                <td>{{ $a->hewan_lain }}</td>
                <td>{{ $a->kepemilikan_rumah }}</td>
                <td>{{ $a->lokasi_hewan }}</td>
                <td>{{ $a->dokter_hewan }}</td>
                <td>{{ $a->halaman_berpagar }}</td>
                <td>{{ $a->jumlah_orang_dewasa }}</td>
                <td>{{ $a->jumlah_anak }}</td>
                <td>{{ $a->alergi_bulu }}</td>
                <td>{{ $a->lokasi_hewan_luar }}</td>
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
            </tr>
            @endforeach
        </tbody>
    </table>