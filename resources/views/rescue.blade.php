<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rescue</title>
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
    <x-navbar></x-navbar>

    {{-- HERO --}}
<section>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 pt-0">
            <div class="col-12 col-lg-4"> <!-- Kolom yang berisi gambar -->
                <img src="images/RescueHeroes.png" class="d-block mx-lg-auto" alt="Bootstrap Themes" height="300" loading="lazy">
                {{-- statistic hero --}}
                <div class="row align-items-end g-4 pt-1 "style="margin-top: -50px;" >
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
            <div class="col-12 col-lg-8"> <!-- Kolom yang berisi teks -->
                <h1 class="display-2 fw-bold lh-1 mb-3">Rescuing Animal Is What We Aspire to Do</h1>
                <p class="fst-normal">Hubungi kami ketika kamu menemukan hewan disekitarmu yang membutuhkan pertolongan.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#}" class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- RESCUE FORM --}}
<section>
    <div class="container-fluid bg-secondary-300 rounded-top-4" style="padding: 4%">
        <h1 class="display-5 fw-bold text-center text-white">Rescue Form</h1>
        <div class="container-xl rounded-4 p-5 bg-white" >
            <form class="row g-3">
                {{-- identifikasi --}}
                <h2 class="fw-bold">A. Identifikasi</h2>
                <div class="row g-3">
                    <div class="form-floating col-md-6">
                        <input type="text" class="form-control" id="" required placeholder="baba">
                        <label for=""> Nama Hewan</label>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="number" class="form-control" id="" required placeholder="baba">
                        <label for=""> Berat Badan Hewan</label>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="text" class="form-control" id="" required placeholder="baba">
                        <label for=""> Jenis Hewan</label>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="text" class="form-control" id="" required placeholder="baba">
                        <label for=""> Deskripsi Hewan (Ciri Khusus)</label>
                    </div>
                    <div class="form-floating  col-12">
                        <textarea class="form-control" required placeholder="baba" id="" style="height: 100px; resize:none;"></textarea>
                        <label for=""> Kondisi Hewan</label>
                    </div>
                 </div>
                 
                 {{-- B. Informasi Penemuan --}}
                 <h2 class="fw-bold">B. Informasi Penemuan</h2>
                 <div class="row g-3">
                    <div class="form-floating col-md-6">
                        <input type="text" class="form-control" id="" required placeholder="baba" style="height: 100px; resize:none;">
                        <label for=""> Nama Penemuan</label>
                    </div>
                     <div class="form-floating  col-md-6">
                         <textarea class="form-control" required placeholder="baba" id="" style="height: 100px; resize:none;"></textarea>
                         <label for=""> Kondisi Hewan</label>
                     </div>
                  </div>
                  
                  {{-- C. Fotografi --}}
                    <h2 class="fw-bold">C. Fotografi</h2>
                    <div class="row g-3">
                        <div class="input col-md-6">
                            <label class="" for="">Foto Hewan</label>
                            <input type="file" class="form-control" id="" multiple required>
                          </div>
                        <div class="input col-md-6">
                            <label class=""> Foto Lokasi Hewan Ditemukan</label>
                            <input type="file" class="form-control" id="" multiple required>
                        </div>
                    </div>

                {{-- D. Data Identitas Pelapor--}}
                <h2 class="fw-bold">D. Data Identitas Pelapor</h2>
                <div class="row g-3">
                    <div class="form-floating col-md-6">
                        <input type="text" class="form-control" id="" required placeholder="baba">
                        <label for=""> Nama Pelapor</label>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="number" class="form-control" id="" required placeholder="baba">
                        <label for=""> Usia Pelapor</label>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="number" class="form-control" id="" name="" pattern="[0-9]{10,15}" placeholder="" required>
                        <label for=""> Nomor Telepon</label>
                    </div>
                    <div class="form-floating col-md-6">
                        <select class="form-control">
                            <option selected disabled></option>
                            <option value="">Pria</option>
                            <option value="">Wanita</option>
                        </select>
                        <label for="">Jenis Kelamin</label>
                    </div>
                 </div>

                 {{-- E.Pernyataan Kebenaran --}}
                    <h2 class="fw-bold">E. Pernyataan Kebenaran</h2>
                    <div class="col-md-6" style="text-align: justify">
                        <p>Dengan ini, saya menyatakan bahwa seluruh informasi yang saya berikan dalam formulir ini adalah benar
                            dan akurat sesuai dengan pengetahuan saya. Saya memahami bahwa memberikan informasi yang tidak benar dapat
                            berakibat pada tindakan hukum atau administratif sesuai dengan peraturan 
                            yang berlaku.</p>
    
                        <p>Saya juga menyatakan bahwa saya akan bertanggung jawab penuh atas informasi yang diberikan dan
                            bersedia bekerja sama dengan pihak berwenang atau organisasi terkait dalam proses penyelamatan 
                            hewan liar ini.</p>
                    </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Saya Setuju
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-accent text-white mt-3">Submit Form</button>
                </div>
            </form>
        </div>
    </div>
</section>

    {{-- FOOTER --}}
    <x-footer></x-footer>
</body>
</html>