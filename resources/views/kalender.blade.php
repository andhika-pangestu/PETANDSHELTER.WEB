<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetandShelter | Acara</title>
    <link rel="icon" href="img/icon-trans.png" />
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
{{-- navbar --}}
<x-navbar></x-navbar>
{{-- section1 --}}
<div class="container">
  <div class="banner mt-5 bg-light">
    <div class="blob">
        <img src="img/blob.png" alt="blob" class="banner-image">
    </div>
    <div class="section1">
        <div class="banner-text text-primary-500">
            <h1>Catat Setiap <br>Kegembiraan Bersama<br> Pet Calendar Kami!</h1>
        </div>
    </div>
    <div class="section1">
        <img src="img/pet.png" alt="Gambar Anjing" class="banner-image-dog">
    </div>
</div>

{{-- section2 --}}
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-9 ">
      <div class="card mb-3 rounded-5" style="width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/image.png" class="card img-fluid rounded-start-5 h-100" alt="" style="object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="text-sm fw-bold">Senin, 15 April • 09:30 WIB</h6>
              <h5 class="fs-4 fw-bold">Protect-a-Pet Campaign</h5>
              <p class="card-text text-justify">
                Inisiatif vaksinasi yang bertujuan untuk melindungi hewan peliharaan 
                dari penyakit-penyakit yang dapat dicegah melalui vaksinasi. 
                Dalam kampanye ini, kami menyediakan layanan vaksinasi gratis untuk 
                hewan peliharaan, termasuk vaksin rabies dan vaksin penting lainnya. 
                Dengan memberikan akses mudah dan terjangkau kepada pemilik hewan, 
                kami berharap dapat meningkatkan kesadaran akan pentingnya vaksinasi
                dan membantu mencegah penyebaran penyakit di antara hewan peliharaan 
                dan masyarakat. Bergabunglah dengan kami dalam Protect-a-Pet Campaign 
                untuk melindungi kesehatan dan kebahagiaan hewan peliharaan Anda!
              </p>
              <p class="card-text small">
                <i class="fa-solid fa-location-dot fa-flip"></i> Bandung Indah Plaza, Bandung
              </p>
              <div class= " d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary-500 text-white">Saya Akan Hadir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- section3 --}}
  <div class="row justify-content-center h-100 ">
    <div class="col-12 col-md-6 my-3 my-3">
      <div class="card mb-3 rounded-5 h-100" style="width: 100%;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="img/1.png" class="card img-fluid rounded-start-5 h-100" alt="" style="object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body ">
              <h6 class="text-sm fw-bold">Minggu, 16 Juni • 14:00 WIB</h6>
              <h5 class="fs-4 fw-bold">Furry Fashion Show</h5>
              <p class="card-text text-justify">
                Acara yang menyenangkan di mana anda dapat menampilkan gaya unik hewan 
                peliharaan anda dalam fashion show khusus hewan peliharaan. 
                Selain itu, acara ini juga akan menampilkan kontes kostum terbaik yang 
                pasti akan membuat hewan peliharaan Anda bersinar. 
                Dengan berbagai kategori dan hadiah menarik,
               </p>
              <p class="card-text small">
                <i class="fa-solid fa-location-dot fa-flip"></i> Paris Van Java, Bandung
              </p>
              <div class="d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary-500 text-white">Saya Akan Hadir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 my-3">
      <div class="card mb-3 rounded-5 h-100" style="width: 100%;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="img/2.png" class="card img-fluid rounded-start-5 h-100" alt="" style="object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="text-sm fw-bold">Sabtu, 22 Juni • 13:30 WIB</h6>
              <h5 class="fs-4 fw-bold">Meow Meetup</h5>
              <p class="card-text text-justify">
                Acara seru bagi pecinta kucing untuk berkumpul, berbagi cerita, dan 
                memperkenalkan kucing kesayangan kepada teman-teman kucing lainnya. 
                Di sini, Anda dapat mendiskusikan perawatan kucing, mendapatkan tips dari 
                ahli, dan berinteraksi dengan berbagai jenis kucing. 
                Dengan suasana santai dan penuh cinta.
             </p>
              <p class="card-text small">
                <i class="fa-solid fa-location-dot fa-flip"></i> Metro Indah Mall, Bandung
              </p>
              <div class="d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary-500 text-white">Saya Akan Hadir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 my-3">
      <div class="card mb-3 rounded-5 h-100" style="width: 100%;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="img/3.png" class="card img-fluid rounded-start-5 h-100" alt="" style="object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="text-sm fw-bold">Minggu, 30 Juni • 09:00 WIB<</h6>
              <h5 class="fs-4 fw-bold">Doggy Day Out</h5>
              <p class="card-text text-justify">
                Nikmati Doggy Day Out, acara seru untuk anda dan anjing kesayangan. 
                Bawa anjing anda untuk berinteraksi dengan anjing lain dalam lingkungan 
                yang aman. Ada kelas pelatihan dan pertunjukan untuk anda nikmati bersama anjing anda. 
                Ajak anjing anda bermain dan bergabunglah dengan kami!
             </p>
              <p class="card-text small">
                <i class="fa-solid fa-location-dot fa-flip"></i> Summarecon, Bandung
              </p>
              <div class="d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary-500 text-white">Saya Akan Hadir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 my-3">
      <div class="card mb-3 rounded-5 h-100" style="width: 100%;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="img/4.png" class="card img-fluid rounded-start-5 h-100" alt="" style="object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="text-sm fw-bold">Jumat, 5 Juli • 07:00 WIB</h6>
              <h5 class="fs-4 fw-bold">Fur-tastic Fun Run</h5>
              <p class="card-text text-justify">
                Acara lari seru untuk Anda dan hewan peliharaan kesayangan. 
                Berlari atau berjalan bersama dalam rute tertentu menjaga kebugaran 
                Anda dan hewan peliharaan. Memberi kesempatan berinteraksi dengan 
                komunitas pecinta hewan. Cara sempurna menikmati 
                waktu bersama hewan peliharaan sambil mendukung gaya hidup sehat.
               </p>
              <p class="card-text small">
                <i class="fa-solid fa-location-dot fa-flip"></i> Gedung Sate, Bandung
              </p>
              <div class="d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary-500 text-white">Saya Akan Hadir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 my-3">
      <div class="card mb-3 rounded-5 h-100" style="width: 100%;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="img/5.png" class="card img-fluid rounded-start-5 h-100" alt="kucing di suntik" style="object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="text-sm fw-bold">Senin, 7 Juli • 08:00 WIB</h6>
              <h5 class="fs-4 fw-bold">Paw-lentine's Day Celebration<</h5>
              <p class="card-text text-justify ">
                Paw-lentine's Day Celebration adalah acara spesial untuk merayakan 
                kasih sayang anda dengan hewan peliharaan. Nikmati foto bersama, 
                permainan interaktif, dan hadiah-hadiah spesial. 
                Dengan suasana hangat dan penuh cinta, acara ini adalah kesempatan 
                sempurna untuk membuat 
                kenangan manis bersama hewan peliharaan anda.
              </p>
              <p class="card-text small">
                <i class="fa-solid fa-location-dot fa-flip"></i> Cihapit, Bandung
              </p>
              <div class="d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary-500 text-white">Saya Akan Hadir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 my-3">
      <div class="card mb-3 rounded-5 h-100 " style="width: 100%;">
        <div class="row g-0 h-100">
          <div class="col-md-4 ">
            <img src="img/6.png" class="card img-fluid rounded-start-5 h-100" alt="" style="object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="text-sm fw-bold">Sabtu, 14 Juli • 11:00 WIB</h6>
              <h5 class="fs-4 fw-bold">Pet Health Check</h5>
              <p class="card-text text-justify ">
                Kami menyediakan layanan kesehatan hewan peliharaan gratis, 
                  termasuk pemeriksaan, vaksinasi, dan konsultasi dengan dokter hewan. 
                  Tujuan kami adalah meningkatkan kesadaran akan perawatan kesehatan hewan 
                  peliharaan dan memastikan 
                  hewan peliharaan Anda tetap sehat dan bahagia.
                </p>
              <p class="card-text small">
                <i class="fa-solid fa-location-dot fa-flip"></i> Kiara Artha Park, Bandung
              </p>
              <div class="d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary-500 text-white">Saya Akan Hadir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
{{-- footer --}}
<x-footer></x-footer>
</body>
</html>