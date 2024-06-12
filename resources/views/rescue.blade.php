<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PetandShelter | Form Adopsi</title>
        <link rel="icon" href="img/icon-trans.png" />
        <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/rescue.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">

    </head>
<body>
    {{-- NAVBAR --}}

    <x-navigation></x-navigation>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




    {{-- HERO --}}
<section>
    <div class="container col-xxl-8 px-3 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 pt-0">
            <div class="col-12 col-lg-5"> <!-- Kolom yang berisi gambar -->
                <img src="images/RescueHeroes.png" class="d-block mx-lg-auto" alt="Bootstrap Themes" style="height: 300px; width: 100%; object-fit:contain;" loading="lazy">
                {{-- statistic hero --}}
                <div class="row align-items-end g-4 pt-1 "style="margin-top: -85px;" >
                    <div class="col-sm-6 mb-3 mb-sm-0 ">
                        <div class="container-sm">
                            <div class="card border-0 shadow-sm shadow-primary rounded-4">
                                <div class="card-body text-center">
                                    <h1 class="card-title text-primary fw-bold mb-0"style="font-size: 1.7em !important;">100+</h1>
                                    <p class="card-content fs-5 fw-bold text-primary mb-0"style="font-size: 0.8em !important;">Volunteer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card border-0 shadow shadow-primary rounded-4">
                            <div class="card-body text-center">
                                <h1 class="card-title text-primary fw-bold mb-0" >150+</h1>
                                <p class="card-content fs-5 fw-bold text-primary mb-0 ">Rescued Pet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7"> <!-- Kolom yang berisi teks -->
                <h1 class="display-3 fw-bold lh-1 mb-3">Rescuing Animal Is What We Aspire to Do</h1>
                <p class="fst-normal">Hubungi kami ketika kamu menemukan hewan disekitarmu yang membutuhkan pertolongan.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#}" class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- Rescue Information --}}
    <div class="container bg-accent-300 py-5 my-5 rounded-3">
        <div class="row align-items-start text-center">
            <div class="col-12 col-md-3 text-md-start ps-3 pl-lg-5 mt-3 fw-bold">
                <h2 class="fw-bold fs-2 fs-md-3 pt-md-4">Apa itu Rescue?</h2>
            </div>
            <div class="col-12 col-md-5 text-md-start mt-3"> 
                <h5 class="fw-bold fs-4 fs-md-5">Beri Kehidupan</h5>
                <p class="mb-0 fw-normal fs-6 fs-md-7">Membawa kegembiraan tak ternilai bagi pemiliknya, memberikan mereka teman setia yang akan selalu ada di samping mereka dalam setiap petualangan kehidupan.</p>
            </div>
            <div class="col-12 col-md-4 text-md-start mt-3">
                <h5 class="fw-bold fs-4 fs-md-5">Sahabat Sejati di Rumah</h5>
                <p class="mb-0 fw-normal fs-6 fs-md-7">Hewan peliharaan memberikan kebahagiaan dan kehangatan, menjadi sahabat setia yang selalu ada di setiap momen hidup.</p>
            </div>
        </div>
    </div>

    {{-- RESCUE FORM --}}
<section>
    <div class="container-fluid bg-secondary-300 rounded-top-4 mt-5" style="padding: 4%; margin-top:4% !important;">
        <h1 class="display-5 fw-bold text-center text-white">Rescue Form</h1>
        <div class="container-xl rounded-4 p-5 bg-white" >
            <form method="POST" action="{{ route('rescue.store') }}" enctype="multipart/form-data">
                @csrf
                {{-- identifikasi --}}
                <h2 class="fw-bold pt-3"> Identifikasi</h2>
                <div class="row g-3 mt-0">
                    <div class=" col-md-6 mt-0">
                        <label for=""> Nama Hewan</label>
                        <input type="text" class="form-control" id="namaHewan" name="namaHewan" required placeholder="ex: baba">
                    </div>
                    <div class=" col-md-6 mt-0">
                        <label for=""> Berat Badan Hewan</label>
                        <input type="text" class="form-control" id="bbHewan" name="bbHewan" required placeholder="ex: 5kg">
                    </div>
                    <div class=" col-md-6">
                        <label for=""> Jenis Hewan</label>
                        <input type="text" class="form-control" id="jenisHewan" name="jenisHewan" required placeholder="ex: kucing">
                    </div>
                    <div class=" col-md-6">
                        <label for=""> Deskripsi Hewan (Ciri Khusus)</label>
                        <input type="text" class="form-control" id="deskripsiHewan" name="deskripsiHewan" required placeholder="ex: tompel di ekor">
                    </div>
                    <div class="  col-12">
                        <label for=""> Kondisi Hewan</label>
                        <textarea class="form-control" required placeholder="ex: terperangkap di got" id="kondisiHewan" name="kondisiHewan" style="height: 100px; resize:none;"></textarea>
                    </div>
                 </div>
                 
                 {{-- B. Informasi Penemuan --}}
                 <h2 class="fw-bold pt-3"> Informasi Penemuan</h2>
                 <div class="row g-3 mt-0">
                    <div class=" col-md-6 mt-0">
                        <label for=""> Tanggal lokasi Penemuan</label>
                        <textarea type="text" class="form-control" id="tglLokasiPenemuan" name="tglLokasiPenemuan" required placeholder="ex: 12 april 2024, batubatu" style="height: 100px; resize:none;"></textarea>
                    </div>
                     <div class="  col-md-6 mt-0">
                         <label for=""> Kondisi Lingkungan Hewan Ditemukan</label>
                         <textarea class="form-control rows=3" type="text" required placeholder="ex: kotor, basah" id="kondisiLingkungan" name="kondisiLingkungan" style="height: 100px; resize:none; "></textarea>
                     </div>
                  </div>
                  
                  {{-- C. Fotografi --}}
                    <h2 class="fw-bold pt-3"> Fotografi</h2>
                    <div class="row g-3 mt-0">
                        <div class="input col-md-6 mt-0">
                            <label class="" for="">Foto Hewan</label>
                            <input type="file" class="form-control" id="fotoHewan" name="fotoHewan" required>
                          </div>
                        <div class="input col-md-6 mt-0">
                            <label class=""> Foto Lokasi Hewan Ditemukan</label>
                            <input type="file" class="form-control" id="fotoLokasi" name="fotoLokasi" required>
                        </div>
                    </div>

                {{-- D. Data Identitas Pelapor--}}
                <h2 class="fw-bold pt-3"> Data Identitas Pelapor</h2>
                <div class="row g-3 mt-0">
                    <div class=" col-md-6 mt-0">
                        <label for=""> Nama Pelapor</label>
                        <input type="text" class="form-control" id="namaPelapor" name="namaPelapor" required placeholder="ex: Anggiel">
                    </div>
                    <div class=" col-md-6 mt-0">
                        <label for=""> Usia Pelapor</label>
                        <input type="text" class="form-control" id="usiaPelapor" name="usiaPelapor" required placeholder="ex: 26">
                    </div>
                    <div class=" col-md-6">
                        <label for=""> Nomor Telepon</label>
                        <input type="text" class="form-control" id="nomorTelp" name="nomorTelp" pattern="[0-9]{10,15}" placeholder="ex: 0892313842" required>
                    </div>
                    <div class="col-md-6">
                        <label for=""> Jenis Kelamin</label>
                        <select class="form-select text-" id="jenisKelamin" name="jenisKelamin">
                            <option selected disabled>Jenis Kelamin</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                 </div>

                 {{-- E.Pernyataan Kebenaran --}}
                    <h2 class="fw-bold pt-3"> Pernyataan Kebenaran</h2>
                    <div class="col-md-6 mt-0" style="text-align: justify">
                        <p>Dengan ini, saya menyatakan bahwa seluruh informasi yang saya berikan dalam formulir ini adalah benar
                            dan akurat sesuai dengan pengetahuan saya. Saya memahami bahwa memberikan informasi yang tidak benar dapat
                            berakibat pada tindakan hukum atau administratif sesuai dengan peraturan 
                            yang berlaku.</p>
    
                        <p>Saya juga menyatakan bahwa saya akan bertanggung jawab penuh atas informasi yang diberikan dan
                            bersedia bekerja sama dengan pihak berwenang atau organisasi terkait dalam proses penyelamatan 
                            hewan liar ini.</p>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                          <label class="form-check-label fw-bold" for="invalidCheck">
                            Dengan ini saya secara sadar, saya setuju dengan syarat dan ketentuan lembar persetujuan
                          </label> 
                          <div class="invalid-feedback">
                            Anda harus menyetujuinya sebelum mengirimkan.
                          </div>
                        </div>
                      </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-accent text-white mt-3">Submit Form</button>
                </div>
            </id=>
        </div>
    </div>
</section>

    {{-- FOOTER --}}
    <x-footer></x-footer>


    <script>
        document.getElementById('adoptionForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form submit default
    
            console.log('Form submitted'); // Check if the event listener is triggered
    
            // Validasi semua field form
            const form = event.target;
            if (form.checkValidity()) {
                console.log('Form is valid'); // Check if form validation works
                // Jika valid, alihkan ke halaman thank you
                window.location.href = 'thank';
            } else {
                console.log('Form is invalid'); // Check if form validation works
                // Jika tidak valid, tampilkan pesan error
                alert('Mohon isi semua field yang diperlukan.');
            }
        });
    
</body>
</html>
