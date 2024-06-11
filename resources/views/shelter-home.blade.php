@include('layouts.head')
<x-navigation></x-navigation>

<div class="container col-xxl-8 px-5 py-5 pt-0 mt-0" >
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mt-5 pt-0" >
        <div class="col-12 col-lg-6 px-0"> <!-- Kolom yang berisi gambar -->
            <img src="images/ShelterHeroes.png" class="d-block mx-lg-auto" alt="Bootstrap Themes" style="height: 400px; width: 100%; object-fit:contain;" loading="lazy">
            {{-- statistic hero --}}
            <div class="row align-items-end g-4 pt-1 "style="margin-top: -85px;" >
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card border-0 shadow shadow-primary rounded-4">
                        <div class="card-body text-center">
                            <h1 class="card-title text-accent fw-bold mb-0" >20</h1>
                            <p class="card-content fs-5 fw-bold text-accent mb-0 ">Mitra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 px-0"> <!-- Kolom yang berisi teks -->
            <p class="fst-normal text-accent">Mencari shelter disekitarmu</p>
            <h1 class="display-3 fw-bold lh-1 mb-3">Temukan Shelter Terdekat</h1>
            <p class="fst-normal">Temukan shelter dan temukan pilihan hewan hewan yang bisa kamu adopsi sekarang juga</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <form class="d-flex">
                    <div class="input-group shadow-primary rounded-end-4">
                        <input class="form-control me-2 no-border" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-accent " type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>


<div class="container-fluid col-xxl-12 py-5 ">
<div class="col-12 col-lg-3 bg-accent rounded-4">
    <p class=" fw-bold fs-4 py-2 ps-3 mb-4">Daftar Shelter</p>
</div>
</div>


    <div class="container py-3">
        <div class="row">
            @foreach ($shelters as $shelter)
                <div class="col-lg-3 py-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('uploads/' . $shelter->foto) }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover; image-rendering: auto;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $shelter->nama_shelter }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $shelter->kota }}</li>
                            <li class="list-group-item">{{ $shelter->alamat_jalan }}</li>
                        </ul>
                        <div class="d-flex justify-content-start ps-2 py-2">
                            <a href="/shelter" class="btn btn-secondary">Go to Shelter Page</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>>


<div class="w-100 bg-accent" style="height: 50px; "></div>
<div class=" container  col-xxl-12 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-12 col-lg-4 overflow-hidden">
            <img src="images/Sheltergroup.png" class="d-block mx-lg-auto img-fluid" alt="Gambar Hewan"loading="lazy">
        </div>
        <div class="col-12 col-lg-7">
            <div class="col-12 col-md-10 col-lg-8 col-xl-10">
                <h3 class="fs-6 mb-2 text-secondary fw-bold text-uppercase">Need Help?</h3>
                <h1 class="display-3 fw-bold lh-1 mb-4">Ada apa kira kira?</h1>
                <p class="fst-normal" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione impedit fugit vitae dolores, suscipit rem esse totam quae deserunt tempora ex, a mollitia provident sit non at dolor minus neque unde natus veritatis modi? Reiciendis tenetur architecto corporis corrupti iste optio atque illum rem eaque possimus veniam qui quo quos maxime fugiat dolorum, sapiente voluptates temporibus ipsam? Facere nihil minus et molestiae soluta totam, temporibus consequuntur corporis voluptatem placeat similique deleniti labore quae necessitatibus quod ullam! Perspiciatis, dolore. Animi necessitatibus quod ipsam eligendi laboriosam odit porro est quo repellat ipsa recusandae vitae consectetur consequuntur, possimus voluptas sed libero accusantium numquam?</p>
            </div>
        </div>
    </div>
</div>
