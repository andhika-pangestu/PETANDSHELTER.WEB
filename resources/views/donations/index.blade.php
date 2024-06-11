
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>donation</title>
        <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">
    </head>


<body>
    
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12 mb-4">
                <div class="card  text-primary rounded-3">
                    <img src="../images/shelter.png" class="card-img-top img-fluid  mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-1 fw-bold">Berikan Donasi Terbaikmu</h5>
                        <p class="card-text">kamu bisa transfer melalui metode pembayaran yang fleksibel</p>
                    </div>
                 </div>
            </div>
        </div>
        <div class="container">
            <div class="row border-1">
                <div class="col-md-12">
                    <div class="card border-0 rounded shadow-sm">
                        <div class="card-body">
                            <form action="{{ route('donations.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="fullName" value="{{ old('name') }}" name="name" placeholder="Masukan Nama Lengkap">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email" placeholder="Masukan alamat email">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Besaran Donasi (Rp.)</label>
                                    <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" value="{{ old('amount') }}" name="amount" placeholder="Enter donation amount">
                                    @error('amount')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Catatan</label>
                                    <textarea class="form-control @error('note') is-invalid @enderror" id="notes" rows="3" name="note" placeholder="masukan catatan kamu untuk kami">{{ old('note') }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary text-white">Donate Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container" style="margin-top:120px">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Amount</th>
                                <th>Notes</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($donations as $donation)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $donation->name }}</td>
                                <td>{{ $donation->email }}</td>
                                <td>{{ number_format($donation->amount, 0, ',', '.') }}</td>
                                <td>{{ $donation->note }}</td>
                                <td class="text-center">{{ $donation->status }}</td>
                                <td class="text-center">
                                    @if($donation->status == 'PENDING')
                                    <button onclick="payment('{{ $donation->snap_token }}');" class="btn btn-warning-500 btn-sm btn-dark border-">Selesaikan pembayaran</button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                No donations found.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $donations->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    //message with toastr
    @if(session()->has('success'))

        toastr.success('{{ session('success ') }}', 'BERHASIL!');

    @elseif(session()->has('error'))

        toastr.error('{{ session('error ') }}', 'GAGAL!');

    @endif

</script>
<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
    function payment(n) {
        snap.pay(n, {
            onSuccess: function () {
                window.location = "/donations"
            },
            onPending: function () {
                window.location = "/donations"
            },
            onError: function () {
                window.location = "/donations"
            }
        })
    }
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success ') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error ') }}', 'GAGAL!');

        @endif

    </script>
</body>

</html>
