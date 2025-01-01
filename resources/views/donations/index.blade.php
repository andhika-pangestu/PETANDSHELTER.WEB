<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">
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
                    <p class="card-text">Kamu bisa transfer melalui metode pembayaran yang fleksibel</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row border-1">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow-sm">
                    <div class="card-body">
                        <form id="donation-form">
                            @csrf
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="fullName" name="name" placeholder="Masukan Nama Lengkap" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan alamat email" required>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Besaran Donasi (Rp.)</label>
                                <input type="text" class="form-control" id="amount" name="amount" placeholder="Masukkan besaran donasi" required min="1000" onkeyup="formatRupiah(this)">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Catatan</label>
                                <textarea class="form-control" id="notes" rows="3" name="note" placeholder="Masukan catatan kamu untuk kami"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Donate Now</button>
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
// Function to format input as currency (Rupiah)
function formatRupiah(input) {
    let value = input.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
    let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Add thousand separators
    input.value = 'Rp. ' + formattedValue; // Add 'Rp.' prefix
}

document.getElementById('donation-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    const amount = document.getElementById('amount').value.replace(/[^\d]/g, ''); // Remove 'Rp.' and non-numeric characters

    formData.set('amount', amount); // Set the amount to be submitted as a numeric value

    fetch("{{ route('donations.store') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'Accept': 'application/json',
        },
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        snap.pay(data.snapToken, {
            onSuccess: function () {
                window.location = data.redirect_url;
            },
            onPending: function () {
                window.location = data.redirect_url;
            },
            onError: function () {
                alert('Pembayaran gagal. Silakan coba lagi.');
            },
        });
    })
    .catch(error => {
        console.error("Error:", error);
        alert('Terjadi kesalahan, silakan coba lagi.');
    });
});
</script>

<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>

</body>
</html>
