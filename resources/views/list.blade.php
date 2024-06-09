<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
<body>
{{-- navbar --}}
<x-navbar></x-navbar>

{{-- section1 --}}
<div class="container mt-3">
    <div class="row">
        <div class="col-12 d-flex align-items-center mt-3 mb-5">
            <!-- Tombol Back di Kiri -->
            <button onclick="history.back()" class="btn btn-light">
                <i class="fas fa-arrow-left fa-xl"></i>
            </button>
            <!-- Breadcrumb di Kanan -->
            <nav aria-label="breadcrumb" class="ms-auto">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Shelter</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Adopsi</li>
                </ol>
            </nav>
        </div>
    </div>
      <!-- Hero -->
      <div class="justify-content-start">
        <div class="p-5 shadow-4  bg-accent-500 ">
            <div class="d-flex">
                <div>
                    <img src="img/tokopet.png" class="img-fluid">
                </div>
                <div class="ms-5 text-white">
                    <h4 class="fw-bold mb-4">Cimekar Shelter</h4>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-map-location-dot fa-lg me-2"></i>
                        <p class="mb-0">
                            Jl. Melati No. 123
                            Kab Bandung
                            12345
                        </p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-calendar-days fa-lg me-2"></i>
                        <p class="mb-0">
                            Senin - Sabtu: 09.00 - 19.00
                            Minggu: Libur
                        </p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-phone-volume fa-lg me-2"></i>
                        <p class="mb-0">(021) 1234-5678</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
  <!-- Hero -->
{{-- section2 --}}
<div class="row justify-content-center mt-5 ">
    <div class="col-md-3 my-4 mx-4 ">
        <div class="card cardpet text-white">
            <img src="img/listpet1.jpg" class="card-img">
            <div class="card-img-overlay">
                 <div class="adoption-button" onclick="redirectToAdoptionPage()">ADOPSI</div>     
            </div>
        </div>
    </div>
    <div class="col-md-3 my-4 mx-4">
        <div class="card cardpet">
            <img src="img/listpet2.webp" class="card-img">
            <div class="card-img-overlay">
                <div class="adoption-button" onclick="redirectToAdoptionPage()">ADOPSI</div>     
            </div>
        </div>
    </div>
    <div class="col-md-3 my-4 mx-4">
        <div class="card cardpet">
            <img src="img/listpet3.jpg" class="card-img">
            <div class="adoption-button" onclick="redirectToAdoptionPage()">ADOPSI</div>     
        </div>
    </div>
</div>
<div class="row justify-content-center ">
    <div class="col-md-3 my-4 mx-4">
        <div class="card cardpet">
            <img src="img/listpet4.webp" class="card-img">
            <div class="card-img-overlay">
                <div class="adoption-button" onclick="redirectToAdoptionPage()">ADOPSI</div>     
            </div>
        </div>
    </div>
    <div class="col-md-3 my-4 mx-4">
        <div class="card cardpet">
            <img src="img/listpet5.jpg" class="card-img">
            <div class="card-img-overlay">
                <div class="adoption-button" onclick="redirectToAdoptionPage()">ADOPSI</div>     
            </div>
        </div>
    </div>
    <div class="col-md-3 my-4 mx-4">
        <div class="card cardpet">
            <img src="img/listpet6.webp" class="card-img">
            <div class="card-img-overlay">
                <div class="adoption-button" onclick="redirectToAdoptionPage()">ADOPSI</div>     
            </div>
        </div>
    </div>
</div>

{{-- section3 --}}
<div class="row my-5">
    <div class="col-md-2">
        <h5 class="text-white bg-accent-500 p-3 rounded-end">Shelter lainnya</h5>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-4 g-4 "> <!-- Mengubah jumlah kolom menjadi 4 -->
    <div class="col ">
      <div class="card h-100 rounded-4">
        <img src="img/tokopet.png" class="card-img-top img-fluid rounded-top-4 h-100" style="object-fit: cover;"> <!-- Menambah kelas img-fluid untuk membuat gambar responsif -->
        <div class="card-body">
          <h5 class="card-title fw-bold">Pelangi Kasih</h5>
          <h6 class="card-title">Cipadung</h6>
          <p class="card-text">Jl. Cempaka No. 25, Bandung Timur</p>
          <a href="#" class="btn btn-accent text-white">Lihat Shelter</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 rounded-4">
        <img src="img/tokopet.png" class="card-img-top img-fluid rounded-top-4 h-100" style="object-fit: cover;"> <!-- Menambah kelas img-fluid untuk membuat gambar responsif -->
        <div class="card-body">
            <h5 class="card-title fw-bold">Shelter Anjing Damai</h5>
            <h6 class="card-title">Bandung Utara</h6>
            <p class="card-text">Jl. Cibiru Raya No. 89, Bandung</p> 
            <a href="#" class="btn btn-accent text-white">Lihat Shelter</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 rounded-4">
        <img src="img/tokopet.png" class="card-img-top img-fluid rounded-top-4 h-100" style="object-fit: cover;"> <!-- Menambah kelas img-fluid untuk membuat gambar responsif -->
        <div class="card-body">
          <h5 class="card-title fw-bold">Hewan Bahagia</h5>
          <h6 class="card-title">Bandung Selatan</h6>
          <p class="card-text">Jl. Suryalaya No. 45, Bandung</p>
          <a href="#" class="btn btn-accent text-white">Lihat Shelter</a>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card h-100 rounded-4">
          <img src="img/tokopet.png" class="card-img-top img-fluid rounded-top-4 h-100" style="object-fit: cover;"> <!-- Menambah kelas img-fluid untuk membuat gambar responsif -->
          <div class="card-body">
            <h5 class="card-title fw-bold">Shelter Hati Kecil</h5>
          <h6 class="card-title">Bandung Timur</h6>
          <p class="card-text"> Jl. Ciumbuleuit No. 123, Bandung</p>
          <a href="#" class="btn btn-accent text-white">Lihat Shelter</a>
          </div>
        </div>
      </div>
  </div>


</div>
{{-- footer --}}
<x-footer></x-footer>
</body>
</html>