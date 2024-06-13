<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donation</title>
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
</head>

<body>
    <x-navigation></x-navigation>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12 mb-4">
                <div class="card text-primary rounded-3">
                    <img src="../images/shelter.png" class="card-img-top img-fluid mx-auto d-block" alt="...">
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
                            <form id="donationForm">
                                @csrf
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="fullName" name="name" placeholder="Masukan Nama Lengkap">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan alamat email">
                                </div>
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Besaran Donasi (Rp.)</label>
                                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter donation amount">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Catatan</label>
                                    <textarea class="form-control" id="notes" rows="3" name="note" placeholder="masukan catatan kamu untuk kami"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary text-white">Donate Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Message with toastr
        @if(session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif

        $('#donationForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('donations.store') }}",
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if(response.success) {
                        snap.pay(response.snapToken, {
                            // Optional
                            onSuccess: function(result) {
                                alert('Pembayaran berhasil!');
                            },
                            // Optional
                            onPending: function(result) {
                                alert('Pembayaran sedang diproses!');
                            },
                            // Optional
                            onError: function(result) {
                                alert('Pembayaran gagal!');
                            }
                        });
                    } else {
                        alert(response.message);
                    }
                },
                error: function(response) {
                    alert('Terjadi kesalahan, coba lagi.');
                }
            });
        });
    </script>
</body>

</html>
