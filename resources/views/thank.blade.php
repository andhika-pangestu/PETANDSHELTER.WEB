<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetandShelter | Thank You</title>
    <link rel="icon" href="img/icon-trans.png" />
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
{{-- navbar --}}
<x-navbar></x-navbar>

<div class="container text-center mt-5">
    <h1>Terima Kasih!</h1>
    <p>Permohonan adopsi Anda telah berhasil dikirim. Kami akan menghubungi Anda segera untuk informasi lebih lanjut.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Beranda</a>
</div>

{{-- footer --}}
<x-footer></x-footer>
</body>
</html>
