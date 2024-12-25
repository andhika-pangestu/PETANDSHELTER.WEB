<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
                    <h3 class="fw-bold text-uppercase text-black">Tentang Kami</h3>
                    <p>Selamat datang di Pet and Shelter, tempat di mana anda dapat menemukan sahabat sejati dalam
                        bentuk hewan peliharaan yang penuh kasih</p>
                </header>

                <div class="row about-extra">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="img/icon-black.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                        <h4 class="fw-bold text-black">ADOPT SHELTER</h4>
                        <p class=" text-justify">
                            Pet and Shelter menjadi tempat di mana cinta dan kebaikan bersatu untuk menyelamatkan
                            hewan-hewan yang membutuhkan rumah. Pet and Shelter bukan sekadar tempat adopsi. Ini adalah
                            tempat di mana harapan ditemukan, di mana ekor-ekor yang terpaut dan hati yang lapang
                            bertemu dalam keajaiban cinta. Kami percaya bahwa setiap hewan memiliki hak untuk
                            mendapatkan tempat yang aman dan keluarga baru yang penuh perhatian. Bersama, kita bisa
                            membuat perbedaan. Mari bergabung dalam perjalanan kami menuju dunia yang lebih baik, satu
                            adopsi pada satu waktu. </p>
                        <p>
                            Bersama-sama, kita bisa membuat perbedaan besar dalam kehidupan teman-teman berbulu kita!
                        </p>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- #about -->

        <!--==========================
      Why Us Section
    ============================-->
        <section id="why-us" class="bg-info-200">
            <div class="container">
                <header class="section-header">
                    <h3 class="fw-bold text-uppercase text-black">Apa yang Membuat Kami Berbeda?</h3>
                    <hr class="w-50 mx-auto mb-2 mb-xl-4 border-dark">
                    <p class="fs-5 text-black">Kepercayaan Anda, Prioritas Kami</p>
                </header>

                <div class="row row-eq-height justify-content-center">
                    <div class="col-lg-4 mb-4 ">
                        <div class="card bg-primary-300">
                            <div class="card-body ">
                                <h5 class=" card-title text-white text-uppercase">Memperluas Jangkauan Adopsi</h5>
                                <p class="card-text text-white fs-6">Membangun kemitraan dengan organisasi dan komunitas
                                    terkait hewan untuk memperluas jangkauan adopsi serta mendukung keberlanjutan
                                    program adopsi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card bg-primary-300">
                            <div class="card-body">
                                <h5 class="card-title text-white text-uppercase">Menyediakan Website Informatif</h5>
                                <p class="card-text text-white fs-6">Menyediakan sumber daya pendidikan mengenai
                                    pentingnya
                                    adopsi hewan melalui artikel-artikel yang informatif.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card bg-primary-300">
                            <div class="card-body">
                                <h5 class="card-title text-white text-uppercase">Melakukan Peninjauan Inovasi Baru</h5>
                                <p class="card-text text-white fs-6">Memantau dan mengevaluasi dampak program adopsi
                                    serta
                                    terus mencari inovasi baru untuk meningkatkan efektivitas dan keberhasilan program.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <h2 class="fw-bold fs-1 text-black">40</h2>
                        <p class="text-black">Shelters</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <h2 class="fw-bold fs-1 text-black">421</h2>
                        <p class="text-black">Adopsi</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <h2 class="fw-bold fs-1 text-black">1,364</h2>
                        <p class="text-black">Hewan Diselamatkan</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <h2 class="fw-bold fs-1 text-black">18</h2>
                        <p class="text-black">Donatur</p>
                    </div>
                </div>
            </div>
        </section>
        <!--==========================
      Tujuan Kami
    ============================-->
        <section id="services">
            <div class="container">
                <header class="section-header">
                    <h3 class="fw-bold text-uppercase text-black pb-5">Tujuan Kami</h3>
                </header>

                <div class="row">

                    <!-- Card 1 -->
                    <div class="col-md-5 col-lg-4 wow bounceInUp mb-4" data-wow-duration="1.4s">
                        <div class="box card h-100 d-flex flex-column justify-content-start align-items-center">
                            <div class="icon mt-3 mb-4">
                                <i class="fas fa-heart fa-3x" style="color: #FF6F70;"></i>
                            </div>
                            <!-- Teks -->
                            <h4 class="title text-center fw-bold"><a href="" style="color: #E86566;">Genuine Love
                                    and Care</a></h4>
                            <p class="text-center fs-6">Menyediakan tempat bagi hewan-hewan yang terlantar atau
                                terbuang
                                untuk menemukan rumah yang penuh kasih.</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-5 col-lg-4 wow bounceInUp mb-4" data-wow-duration="1.4s">
                        <div class="box card h-100 d-flex flex-column justify-content-start align-items-center">
                            <div class="icon mt-3 mb-4">
                                <i class="fas fa-paw fa-3x" style="color: #FF6F70;"></i>
                            </div>
                            <!-- Teks -->
                            <h4 class="title text-center fw-bold"><a href="" style="color: #E86566;">Animal
                                    Rescue Support</a></h4>
                            <p class="text-center fs-6">Memberikan bantuan kepada organisasi yang menyelamatkan
                                hewan-hewan terlantar dan membutuhkan.</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-5 col-lg-4 wow bounceInUp mb-4" data-wow-duration="1.4s">
                        <div class="box card h-100 d-flex flex-column justify-content-start align-items-center">
                            <div class="icon mt-3 mb-4">
                                <i class="fas fa-leaf fa-3x" style="color: #FF6F70;"></i>
                            </div>
                            <!-- Teks -->
                            <h4 class="title text-center fw-bold"><a href=""
                                    style="color: #E86566;">Environmental Awareness</a></h4>
                            <p class="text-center fs-6">Mengkampanyekan pentingnya menjaga lingkungan dan
                                keberlanjutan ekosistem.</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-5 col-lg-4 wow bounceInUp mb-4" data-wow-duration="1.4s">
                        <div class="box card h-100 d-flex flex-column justify-content-start align-items-center">
                            <div class="icon mt-3 mb-4">
                                <i class="fas fa-users fa-3x" style="color: #FF6F70;"></i>
                            </div>
                            <!-- Teks -->
                            <h4 class="title text-center fw-bold"><a href="" style="color: #E86566;">Community
                                    Support</a></h4>
                            <p class="text-center fs-6">Berkontribusi dalam memberikan dukungan kepada
                                masyarakat yang membutuhkan di sekitar kita.</p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-md-5 col-lg-4 wow bounceInUp mb-4" data-wow-duration="1.4s">
                        <div class="box card h-100 d-flex flex-column justify-content-start align-items-center">
                            <div class="icon mt-3 mb-4">
                                <i class="fas fa-hands-helping fa-3x" style="color: #FF6F70;"></i>
                            </div>
                            <!-- Teks -->
                            <h4 class="title text-center fw-bold"><a href="" style="color: #E86566;">Social
                                    Welfare</a></h4>
                            <p class="text-center fs-6">Memberikan bantuan kepada individu yang membutuhkan
                                melalui program sosial.</p>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-md-5 col-lg-4 wow bounceInUp mb-4" data-wow-duration="1.4s">
                        <div class="box card h-100 d-flex flex-column justify-content-start align-items-center">
                            <div class="icon mt-3 mb-4">
                                <i class="fas fa-book fa-3x" style="color: #FF6F70;"></i>
                            </div>
                            <!-- Teks -->
                            <h4 class="title text-center fw-bold"><a href="" style="color: #E86566;">Education
                                    for All</a></h4>
                            <p class="text-center fs-6">Mendukung akses pendidikan untuk semua orang tanpa
                                terkecuali, terutama di daerah-daerah terpencil.</p>
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
            <header class="section-header">
                <h3 class="fw-bold text-uppercase text-black pb-5">Stakeholders</h3>
            </header>
                
    
            <div class="row justify-content-start"> <!-- Align items to the left -->
                <!-- Card 1 -->
                <div class="col-md-2 col-sm-4 wow fadeInUp">
                    <div class="member">
                        <img src="{{ asset('img/team/memberr.png') }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jayanti Mulyana</h4>
                                <span>2201788</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="col-md-2 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="{{ asset('img/team/memberr.png') }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Andhika Pangestu</h4>
                                <span>2200649</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="col-md-2 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="{{ asset('img/team/memberr.png') }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Mikacinta Gustina</h4>
                                <span>2204646</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Card 4 -->
                <div class="col-md-2 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="{{ asset('img/team/memberr.png') }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Rully Bagja AA</h4>
                                <span>2202541</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Card 5 -->
                <div class="col-md-2 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="member">
                        <img src="{{ asset('img/team/memberr.png') }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Zahrah Nisrina Mumtaz</h4>
                                <span>2203452</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- #footer -->

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
