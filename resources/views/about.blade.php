<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <title>PetandShelter | About Us</title>
  <link rel="icon" href="img/icon-trans.png" />
  <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleAbout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Favicons -->
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Bootstrap CSS File -->

<!-- Libraries CSS Files -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/regular.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css" rel="stylesheet">


</head>

<body>
{{-- navbar --}}

@include('navigation')
  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Tentang Kami</h3>
          <p>Selamat datang di Pet and Shelter, tempat di mana Anda dapat menemukan sahabat sejati dalam bentuk hewan peliharaan yang penuh kasih</p>
        </header>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/icon-black.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>ADOPT SHELTER</h4>
            <p>
              Pet and Shelter menjadi tempat di mana cinta dan kebaikan bersatu untuk menyelamatkan hewan-hewan yang membutuhkan rumah. Pet and Shelter bukan sekadar tempat adopsi. Ini adalah tempat di mana harapan ditemukan, di mana ekor-ekor yang terpaut dan hati yang lapang bertemu dalam keajaiban cinta. Kami percaya bahwa setiap hewan memiliki hak untuk mendapatkan tempat yang aman dan keluarga baru yang penuh perhatian. Bersama, kita bisa membuat perbedaan. Mari bergabung dalam perjalanan kami menuju dunia yang lebih baik, satu adopsi pada satu waktu.            </p>
            <p>
              Bersama-sama, kita bisa membuat perbedaan besar dalam kehidupan teman-teman berbulu kita!            </p>
          </div>
        </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>Apa saja yang sudah kami lakukan</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <div class="card-body">
                <h5 class="card-title">Memperluas Jangkauan Adopsi</h5>
                <p class="card-text">Membangun kemitraan dengan organisasi dan komunitas terkait hewan untuk memperluas jangkauan adopsi dan mendukung keberlanjutan program adopsi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <div class="card-body">
                <h5 class="card-title">Menyediakan Web Informatif</h5>
                <p class="card-text">Menyediakan sumber daya pendidikan tentang pentingnya adopsi hewan melalui artikel.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <div class="card-body">
                <h5 class="card-title">Melakukan Peninjauan Inovasi Baru</h5>
                <p class="card-text">Memantau dan mengevaluasi dampak program adopsi serta mencari inovasi baru untuk meningkatkan efektivitas.</p>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">40</span>
            <p>Shelters</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Adoption</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Rescued Pets</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Sponsors</p>
          </div>
  
        </div>

      </div>
    </section>

    
    <!--==========================
      Tujuan Kami
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Tujuan Kami</h3>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
                <div class="icon"><i class="fas fa-heart" style="color: #FF8C8D;"></i></div>
                <h4 class="title"><a href="">Genuine Love and Care</a></h4>
              <p class="description">Menyediakan tempat bagi hewan-hewan yang terlantar atau terbuang untuk menemukan rumah yang penuh kasih.</p>
                <br>
                <br>
                <br>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
                <div class="icon"><i class="fas fa-home" style="color: #FF8C8D;"></i></div>
                <h4 class="title"><a href="">Animal Welfare at the Forefront</a></h4>
              <p class="description">Memastikan bahwa setiap hewan yang kami adopsi telah menjalani proses evaluasi kesehatan menyeluruh oleh para ahli. Dari pemeriksaan medis hingga perawatan gigi, kami memastikan mereka dalam kondisi terbaik sebelum memulai petualangan baru mereka dengan Anda.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
                <div class="icon"><i class="fas fa-file" style="color: #FF8C8D;"></i></div>
                <h4 class="title"><a href="">Transparent and Safe Adoption Process</a></h4>
              <p class="description">Dengan pendekatan yang transparan dan aman, kami memastikan bahwa setiap hewan ditempatkan di rumah yang sesuai dengan kebutuhan dan kepribadiannya.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fas fa-hand-holding-heart" style="color: #FF8C8D;"></i></div>
              <h4 class="title"><a href="">Post-Adoption Guidance and Support</a></h4>
              <br>
              <p class="description">Kami menyediakan bimbingan dan dukungan paska-adopsi yang berkelanjutan untuk memastikan bahwa hewan peliharaan baru Anda beradaptasi dengan baik dan hidup dengan bahagia.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-cat" style="color: #FF8C8D;"></i></div>
              <h4 class="title"><a href="">Diverse Range of Animals</a></h4>
              <p class="description">Dari anjing yang setia hingga kucing yang manis, kami memiliki beragam hewan yang siap diadopsi. Anda akan menemukan teman baru yang sempurna untuk memenuhi kebutuhan dan gaya hidup Anda.</p>
                <br>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fas fa-globe" style="color: #FF8C8D;"></i></div>
              <h4 class="title"><a href="">Share in Making a Difference</a></h4>
              <p class="description">Anda turut berkontribusi dalam misi penyelamatan hewan. Setiap adopsi dan dukungan Anda menghasilkan perubahan nyata bagi hewan-hewan yang membutuhkan, menjadikan dunia ini tempat yang lebih baik untuk semua makhluk.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Stakeholders</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/amandaa.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jayanti Mulyana</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/Bruakakkaka.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Andhika Pangestu</h4>
                  <span>Polisi Militer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/mika.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mikacinta Gustina Amalan Toyibah</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/yaALLAAAH.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rully Bagja Abdurrahman Assides</h4>
                  <span>CMO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

  </main>

  <!-- Footer -->
  <x-footer></x-footer>
 <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-nav/1.0.0/mobile-nav.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>


</body>
</html>