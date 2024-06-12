@include('layouts.head')
<x-navigation></x-navigation>

<div class="container col-xxl-8 px-5 py-5 pt-0 mt-0">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mt-5 pt-0">
        <div class="col-12 col-lg-6 px-0"> <!-- Kolom yang berisi gambar -->
            <img src="images/ShelterHeroes.png" class="d-block mx-lg-auto" alt="Bootstrap Themes"
                style="height: 400px; width: 100%; object-fit:contain;" loading="lazy">
            {{-- statistic hero --}}
            <div class="row align-items-end g-4 pt-1 "style="margin-top: -85px;">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card card-shelter border-0 shadow shadow-shelter rounded-4">
                        <div class="card-body text-center">
                            <h1 class="card-title text-accent fw-bold mb-0">20</h1>
                            <p class="card-content fs-5 fw-bold text-accent mb-0 ">Mitra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 px-0"> <!-- Kolom yang berisi teks -->
            <p class="fst-normal text-accent">Mencari shelter disekitarmu</p>
            <h1 class="display-3 fw-bold lh-1 mb-3">Temukan Shelter Terdekat</h1>
            <p class="fst-normal">Temukan shelter dan temukan pilihan hewan hewan yang bisa kamu adopsi sekarang juga
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <form class="d-flex" action="{{ route('search.shelters') }}" method="GET">
                    <div class="input-group card-shelter shadow-shelter rounded-end-4">
                        <input class="form-control me-2 no-border border-0" type="search" placeholder="Search"
                            aria-label="Search" name="search">
                        <button class="btn btn-outline-accent border-0" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>


<div class="container-fluid col-xxl-12 py-5 mb-0 pb-2">
    <div class="col-12 col-lg-3 text-sky-900 bg-accent-300 rounded-4">
        <p class="fw-bold fs-4 py-2 ps-3 mb-4">
            Daftar Shelter {{ $searchTerm ? ' ' . $searchTerm : 'All' }}
        </p>
    </div>
</div>


<style>
    .card-container {
        padding: 0 9px;
    }

    .card-container .card {
        width: calc(100% - 18px);
    }
</style>


<div class="container py-3 pt-0">
    <div class="row">
        @foreach ($shelters as $shelter)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-4 d-flex justify-content-center card-container">
                <div class="card shadow-shelter rounded-4 card-shelter text-sky-900"
                    style="max-width: 18rem; padding:15px;">
                    <img src="{{ asset('uploads/' . $shelter->foto) }}" class="card-img-top rounded" alt="..."
                        style="height: 200px; object-fit: cover; image-rendering: auto;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $shelter->nama_shelter }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa-solid fa-location-dot"
                                style="margin-right: 5px;"></i>{{ $shelter->alamat_jalan }}, {{ $shelter->kota }}</li>
                        <li class="list-group-item"><i class="fa-solid fa-road "
                                style="margin-right: 5px;"></i>{{ $shelter->hari_buka }}: {{ $shelter->jam_buka }}</li>
                    </ul>
                    <div class="d-flex justify-content-start mt-2 ps-2 py-2">
                        <a href="/shelter/{{ $shelter->id }}" class="btn btn-secondary">Shelter Page</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<div class="w-100 bg-accent-300" style="height: 50px; "></div>
<div class=" container  col-xxl-12 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-12 col-lg-4 overflow-hidden">
            <img src="images/Sheltergroup.png" class="d-block mx-lg-auto img-fluid" alt="Gambar Hewan"loading="lazy">
        </div>
        <div class="col-12 col-lg-7">
            <div class="col-12 col-md-10 col-lg-8 col-xl-10">
                <h3 class="fs-6 mb-2 text-secondary fw-bold text-uppercase">Need Help?</h3>
                <h1 class="display-3 fw-bold lh-1 mb-4">Ada apa kira kira?</h1>
                <p class="fst-normal" style="text-align: justify;">Selamat datang di Shelter Hewan kami, di mana kami
                    berusaha menciptakan tempat perlindungan yang aman bagi hewan-hewan yang membutuhkan. Misi kami
                    adalah menyelamatkan, merehabilitasi, dan menempatkan kembali hewan-hewan yang ditinggalkan dan
                    diabaikan. Kami bekerja sama dengan berbagai tempat penampungan dan organisasi penyelamatan untuk
                    memastikan setiap hewan mendapatkan kesempatan untuk hidup yang lebih baik.
                    <br><br> Kami percaya bahwa setiap hewan layak mendapatkan keluarga yang penuh kasih. Melalui
                    program adopsi kami, kami dengan hati-hati mencocokkan hewan peliharaan dengan calon pemilik untuk
                    memastikan kecocokan yang sempurna. Tujuan kami adalah membuat proses adopsi menjadi lancar dan
                    bermanfaat, memberikan panduan dan dukungan kepada pemilik hewan peliharaan baru di setiap langkah.
                    <br> <br>Bergabunglah dengan kami dalam misi kami untuk memberikan setiap hewan kesempatan untuk
                    hidup yang bahagia dan sehat. Bersama-sama, kita dapat menciptakan dunia di mana setiap hewan
                    dihargai, dicintai, dan dirawat. Jika Anda butuh bantuan atau ingin membantu, pintu kami selalu
                    terbuka. Mari kita bekerja sama untuk membuat perubahan positif dalam kehidupan hewan-hewan yang
                    layak ini.

                </p>
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>
