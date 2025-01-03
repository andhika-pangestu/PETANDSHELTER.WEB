<x-app-layout>
    <link rel="icon" href="img/icon-trans.png" />
    <x-navigation></x-navigation>
    <x-slot name="main">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-12 col-lg-4"> <!-- Kolom yang berisi gambar -->
                    <img src="images/ContentHeroes .png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="900" height="800" loading="lazy">
                </div>
                <div class="col-12 col-lg-8"> <!-- Kolom yang berisi teks -->
                    <h1 class="display-2 fw-bold lh-1 mb-3">Berikan Cinta dan Bangun kebahagiaan</h1>
                    <p class="fst-normal text-justify">Temukan sahabat sejati Anda dan berikan mereka kehidupan penuh
                        kasih dengan
                        mengadopsi hewan peliharaan yang membutuhkan rumah. Bergabunglah dengan kami untuk mendukung
                        perlindungan hewan atau menjadi relawan hari ini, dan buat perbedaan nyata dalam kehidupan
                        mereka..</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('adopsi') }}"
                            class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Adopsi</a>
                        <a href="{{ route('about') }}" class="btn btn-outline-secondary-500 btn-lg px-4">Tentang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bg-accent-300 py-5 rounded-3 ">
            <div class="row align-items-start text-center">
                <div class="col-12 col-md-4 text-md-start mt-3 fw-bold ">
                    <h3 class="fw-bold">Memberikan kasih sayang kepada hewan-hewan</h3>
                </div>
                <div class="col-12 col-md-4  text-md-start mt-3">
                    <h5 class="fw-bold">Beri Kehidupan</h5>
                    <p class="mb-0 fw-normal">Membawa kegembiraan tak ternilai bagi pemiliknya, memberikan mereka teman
                        setia yang akan selalu ada di samping mereka dalam setiap petualangan kehidupan.</p>
                </div>
                <div class="col-12 col-md-4   text-md-start mt-3">
                    <h5 class="fw-bold">Sahabat Sejati di Rumah</h5>
                    <p class="mb-0 fw-normal">Hewan peliharaan memberikan kebahagiaan dan kehangatan, menjadi sahabat
                        setia yang selalu ada di setiap momen hidup.</p>
                </div>
            </div>
        </div>


        <section class="bg-light py-5 py-xl-8">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                        <h3 class="fs-3 mb-2 text-secondary text-center text-uppercase fw-bolder">Apa yang Kami
                            Tawarkan?
                        </h3>
                        <h2 class="fs-5 mb-4 text-center">Kami menawarkan layanan yang kompeten dan berkualitas
                        </h2>
                        <hr class="w-50 mx-auto mb-2 mb-xl-4 border-dark-subtle">
                    </div>
                </div>
            </div>

            <div class="container overflow-hidden">
                <div class="row gy-4 gy-xl-0">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div
                            class="card border-0 border-bottom bg-accent-100 rounded-5 border-accent-500 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-between text-center p-xxl-5">
                                <span
                                    class="icon-background bg-accent-500 d-flex align-items-center justify-content-center mx-auto"
                                    style="width: 80px; height: 80px;">
                                    <span class="material-symbols-outlined" style="font-size: 48px; color: white">
                                        pets
                                    </span>
                                </span>
                                <h5 class="mb-2 fw-bold">PET ADOPT</h5>
                                <p class="mb-2">Adopsi hewan dan temukan sahabat setia di rumah</p>
                                <a href="{{ route('adopsi') }}"
                                    class="fw-bold text-decoration-none link-primary p-2 mt-auto">
                                    Cari tahu
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div
                            class="card border-0 border-bottom bg-primary-100 rounded-5 border-primary-500 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-between text-center p-xxl-5">
                                <span
                                    class="icon-background bg-primary-500 d-flex align-items-center justify-content-center mx-auto"
                                    style="width: 80px; height: 80px;">
                                    <span class="material-symbols-outlined" style="font-size: 48px; color: white">
                                        emergency
                                    </span>
                                </span>
                                <h5 class="mb-2 fw-bold">ANIMAL RESCUE</h5>
                                <p class="mb-2">Perlu pertolongan untuk hewan? kami siap membantu</p>
                                <a href="{{ route('rescue') }}"
                                    class="fw-bold text-decoration-none link-primary p-2 mt-auto">
                                    Cari tahu
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div
                            class="card border-0 border-bottom bg-success-100 rounded-5 border-success-500 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-between text-center p-xxl-5">
                                <span
                                    class="icon-background bg-success-500 d-flex align-items-center justify-content-center mx-auto"
                                    style="width: 80px; height: 80px;">
                                    <span class="material-symbols-outlined" style="font-size: 48px; color: white">
                                        account_balance_wallet
                                    </span>
                                </span>
                                <h5 class="mb-2 fw-bold">DONATE</h5>
                                <p class="mb-2">Dukung kami dengan donasi moril dan material</p>
                                <a href="{{ route('donations.create') }}"
                                    class="fw-bold text-decoration-none link-primary p-2 mt-auto">
                                    Cari tahu
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div
                            class="card border-0 border-bottom bg-warning-100 rounded-5 border-warning-500 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-between text-center p-xxl-5">
                                <span
                                    class="icon-background bg-warning-500 d-flex align-items-center justify-content-center mx-auto"
                                    style="width: 80px; height: 80px;">
                                    <span class="material-symbols-outlined" style="font-size: 48px; color: white">
                                        volunteer_activism
                                    </span>
                                </span>
                                <h5 class="mb-2 fw-bold">BE VOLUNTEER</h5>
                                <p class="mb-2">Bantu selamatkan hewan peliharaan</p>
                                <a href="#!" class="fw-bold text-decoration-none link-primary p-2 mt-auto">
                                    Cari tahu
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-12 col-lg-8">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-10">
                            </h3>
                            <h1 class="display-3 fw-bold lh-1 mb-3">ADOPSI HEWAN PELIHARAAN</h1>
                            <p class="fst-normal">Adopsi hewan peliharaan sekarang dan dapatkan kegembiraan tak
                                ternilai dari
                                memiliki teman setia yang akan selalu ada di samping Anda dalam setiap petualangan
                                kehidupan.
                                Jadi, jangan tunda lagi! </p>
                            <div class="justify-content-md-start">
                                <a href="{{ url('/shelter') }}"
                                    class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Adopsi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="img/pet.png" class="d-block mx-lg-auto img-fluid" alt="Gambar Hewan"
                            width="900" height="800" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row flex-lg-row-reverse align-items-center">
                    <div class="col-lg-6">
                        <div class="lc-block">
                            <img class="img-fluid rounded-5" src="img/shelterDog.jpg" loading="lazy" width="900"
                                height="600">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lc-block">
                            <div editable="rich">
                                <h1 class="fw-bold">Yuk Selamatkan Paw</h1>
                                <p class=" text-justify">Ayo bergabung dengan kami dalam menyelamatkan hewan
                                    peliharaan! Gunakan website kami untuk melaporkan hewan yang membutuhkan bantuan
                                    dengan cepat dan mudah. Bersama-sama, kita bisa menjadi penyelamat bagi hewan-hewan
                                    yang butuh pertolongan!</p>
                            </div>
                        </div>
                        <div class="-md-flex justify-content-md-start">
                            <a href="{{ route('rescue') }}"
                                class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Rescue</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{ mix('js/app.js') }}"></script>


</x-app-layout>
