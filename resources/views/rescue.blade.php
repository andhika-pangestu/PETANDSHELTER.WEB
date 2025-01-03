<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetandShelter | Form Adopsi</title>
    <link rel="icon" href="img/icon-trans.png" />
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/rescue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/services/service-4/assets/css/service-4.css">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
      <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
      <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"/>
      <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    </head>

<body>
    {{-- NAVBAR --}}

    <x-navigation></x-navigation>

    {{-- HERO --}}
    <section>
        <div class="container col-xxl-8 px-3 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 pt-0">
                <div class="col-12 col-lg-5"> <!-- Kolom yang berisi gambar -->
                    <img src="images/RescueHeroes.png" class="d-block mx-lg-auto" alt="Bootstrap Themes"
                        style="height: 300px; width: 100%; object-fit:contain;" loading="lazy">
                    {{-- statistic hero --}}
                    <div class="row align-items-end g-4 pt-1 "style="margin-top: -85px;">
                        <div class="col-sm-6 mb-3 mb-sm-0 ">
                            <div class="container-sm">
                                <div class="card border-0 shadow-sm shadow-primary rounded-4">
                                    <div class="card-body text-center">
                                        <h1
                                            class="card-title text-primary fw-bold mb-0"style="font-size: 1.7em !important;">
                                            100+</h1>
                                        <p
                                            class="card-content fs-5 fw-bold text-primary mb-0"style="font-size: 0.8em !important;">
                                            Volunteer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card border-0 shadow shadow-primary rounded-4">
                                <div class="card-body text-center">
                                    <h1 class="card-title text-primary fw-bold mb-0">150+</h1>
                                    <p class="card-content fs-5 fw-bold text-primary mb-0 ">Rescued Pet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7"> <!-- Kolom yang berisi teks -->
                    <h1 class="display-3 fw-bold lh-1 mb-3">Rescuing Animal Is What We Aspire to Do</h1>
                    <p class="fst-normal">Hubungi kami ketika kamu menemukan hewan disekitarmu yang membutuhkan
                        pertolongan.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('rescue.hubungiKami') }}" class="btn btn-primary-500 btn-lg px-4 me-md-2 text-white">Hubungi Kami</a>
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
                <p class="mb-0 fw-normal fs-6 fs-md-7">Membawa kegembiraan tak ternilai bagi pemiliknya, memberikan
                    mereka teman setia yang akan selalu ada di samping mereka dalam setiap petualangan kehidupan.</p>
            </div>
            <div class="col-12 col-md-4 text-md-start mt-3">
                <h5 class="fw-bold fs-4 fs-md-5">Sahabat Sejati di Rumah</h5>
                <p class="mb-0 fw-normal fs-6 fs-md-7">Hewan peliharaan memberikan kebahagiaan dan kehangatan, menjadi
                    sahabat setia yang selalu ada di setiap momen hidup.</p>
            </div>
        </div>
    </div>

    {{-- RESCUE FORM --}}
    <section>
        <div class="container-fluid bg-secondary-300 rounded-top-4 mt-5" style="padding: 4%; margin-top:4% !important;">
            <h1 class="display-5 fw-bold text-center text-white">Rescue Form</h1>
            <div class="container-xl rounded-4 p-5 bg-white">
                <form id="rescueForm"method="POST" action="{{ route('rescue.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{-- identifikasi --}}
                    <h2 class="fw-bold pt-3"> Identifikasi</h2>
                    <div class="row g-3 mt-0">
                        <div class=" col-md-6 mt-0">
                            <label for=""> Nama Hewan</label>
                            <input type="text" class="form-control" id="namaHewan" name="namaHewan" required
                                placeholder="ex: baba">
                        </div>
                        <div class=" col-md-6 mt-0">
                            <label for=""> Berat Badan Hewan/kg</label>
                            <input type="number" class="form-control" id="bbHewan" name="bbHewan" required
                                placeholder="ex: 5">
                        </div>
                        <div class="col-md-6">
                            <label for="jenisHewan">Jenis Hewan</label>
                            <select class="form-control" id="jenisHewan" name="jenisHewan" required>
                                <option value="" disabled>Pilih jenis hewan...</option>
                                <option value="kucing">Kucing</option>
                                <option value="anjing">Anjing</option>
                                <option value="bebek">Bebek</option>
                                <option value="sapi">Sapi</option>
                                <option value="kambing">Kambing</option>
                                <option value="udang">Udang</option>
                                <option value="ikan">Ikan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class=" col-md-6">
                            <label for=""> Deskripsi Hewan (Ciri Khusus)</label>
                            <input type="text" class="form-control" id="deskripsiHewan" name="deskripsiHewan"
                                required placeholder="ex: tompel di ekor">
                        </div>
                        <div class="  col-12">
                            <label for=""> Kondisi Hewan</label>
                            <textarea class="form-control" required placeholder="ex: terperangkap di got" id="kondisiHewan" name="kondisiHewan"
                                style="height: 100px; resize:none;"></textarea>
                        </div>
                    </div>

                    {{-- B. Informasi Penemuan --}}
                    <h2 class="fw-bold pt-3"> Informasi Penemuan</h2>
                    <div class="row g-3 mt-0">
                        <div class=" col-md-6 mt-0">
                            <div id="map" style="width: 100%; height: 400px;"></div>
                            <input type="hidden" id="latitude" name="latitude" />
                            <input type="hidden" id="longitude" name="longitude" />
                            {{-- <textarea type="text" class="form-control" id="tglLokasiPenemuan" name="tglLokasiPenemuan" required
                                placeholder="ex: 12 april 2024, batubatu" style="height: 100px; resize:none;"></textarea> --}}
                            </div>

                            <div class="col-md-6 mt-0">
                            <!-- Address Display -->
                            <label for="tglLokasiPenemuan" class="mt-3">Alamat Penemuan</label>
                            <input type="text" class="form-control" id="tglLokasiPenemuan" name="tglLokasiPenemuan" required placeholder="Alamat akan ditampilkan di sini" readonly/>
                            
                            <!-- Confirm Location Button -->
                            <button type="button" class="btn btn-primary mt-2" id="confirmLocation">This Location</button>

                            <div class="col-md-0 mt-5">
                            <label for="">Kondisi Lingkungan Hewan Ditemukan</label>
                            <textarea class="form-control rows=3" required placeholder="ex: kotor, basah" id="kondisiLingkungan"
                                name="kondisiLingkungan" style="height: 100px; resize:none;"></textarea>
                            </div>
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

                    {{-- D. Data Identitas Pelapor --}}
                    <h2 class="fw-bold pt-3"> Data Identitas Pelapor</h2>
                    <div class="row g-3 mt-0">
                        <div class=" col-md-6 mt-0">
                            <label for=""> Nama Pelapor</label>
                            <input type="text" class="form-control" id="namaPelapor" name="namaPelapor" required
                                placeholder="ex: Anggiel">
                        </div>
                        <div class=" col-md-6 mt-0">
                            <label for=""> Usia Pelapor</label>
                            <input type="number" class="form-control" id="usiaPelapor" name="usiaPelapor" required
                                placeholder="ex: 26">
                        </div>
                        <div class=" col-md-6">
                            <label for=""> Nomor Telepon</label>
                            <input type="text" class="form-control" id="nomorTelp" name="nomorTelp"
                                pattern="[0-9]{10,15}" placeholder="ex: 0892313842" required>
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
                        <p>Dengan ini, saya menyatakan bahwa seluruh informasi yang saya berikan dalam formulir ini
                            adalah benar
                            dan akurat sesuai dengan pengetahuan saya. Saya memahami bahwa memberikan informasi yang
                            tidak benar dapat
                            berakibat pada tindakan hukum atau administratif sesuai dengan peraturan
                            yang berlaku.</p>

                        <p>Saya juga menyatakan bahwa saya akan bertanggung jawab penuh atas informasi yang diberikan
                            dan
                            bersedia bekerja sama dengan pihak berwenang atau organisasi terkait dalam proses
                            penyelamatan
                            hewan liar ini.</p>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                required="">
                            <label class="form-check-label fw-bold" for="invalidCheck">
                                Dengan ini saya secara sadar, saya setuju dengan syarat dan ketentuan lembar persetujuan
                            </label>
                            <div class="invalid-feedback">
                                Anda harus menyetujuinya sebelum mengirimkan.
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-accent text-white mt-3" >Submit Form</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <x-footer></x-footer>


    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Your form has been successfully submitted!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="confirmSubmit">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('rescueForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from being submitted immediately

            const form = event.target;
            if (form.checkValidity()) {
                console.log('Form is valid');
                $('#successModal').modal('show');
            } else {
                console.log('Form is invalid');
                alert('Mohon isi semua field yang diperlukan.');
            }
        });

        // Add an event listener to the "OK" button in the success modal
        document.getElementById('confirmSubmit').addEventListener('click', function() {
            $('#successModal').modal('hide'); // Hide the modal
            setTimeout(function() {
                document.getElementById('rescueForm').removeEventListener('submit', preventDefaultSubmit, true);
                document.getElementById('rescueForm').submit();
            }, 500); // Adding a slight delay to ensure the modal hides properly
        });

        function preventDefaultSubmit(event) {
            event.preventDefault();
        }

    // Initialize the map
    let map = L.map('map').setView([-2.5489, 118.0149], 5);

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Initialize a single marker variable to manage all markers
    var marker = null;
    var currentPolygon = null;

    // Function to set or move the marker
    function setMarker(latlng) {
        if (marker) {
            marker.setLatLng(latlng);
            console.log('Marker moved to:', latlng);
        } else {
            marker = L.marker(latlng).addTo(map);
            console.log('Marker added at:', latlng);
        }

        // Remove existing polygon if any
        if (currentPolygon) {
            map.removeLayer(currentPolygon);
            console.log('Existing polygon removed.');
        }

        // Optionally, add a polygon around the marker
        
        currentPolygon = L.circle(latlng, {
            fillColor: 'lightblue',
            fillOpacity: 0.3,
            radius: 500
        }).addTo(map);
        
    }

    // Function to update the address input field using reverse geocoding
    function updateAddressField(latlng) {
        console.log('Initiating reverse geocoding...');
        fetch(`https://nominatim.openstreetmap.org/reverse?lat=${latlng.lat}&lon=${latlng.lng}&format=json`)
            .then(response => response.json())
            .then(data => {
                console.log('Reverse geocoding callback executed.');
                if (data.display_name) {
                    document.getElementById('tglLokasiPenemuan').value = data.display_name;
                    console.log('Address updated:', data.display_name);
                } else {
                    document.getElementById('tglLokasiPenemuan').value = 'Alamat tidak ditemukan';
                    console.log('No address found for selected location.');
                }
            })
            .catch(error => {
                console.error('Error during reverse geocoding:', error);
                document.getElementById('tglLokasiPenemuan').value = 'Alamat tidak ditemukan';
            });
    }

    // Handle map clicks
    function onMapClick(e) {
        console.log('Map clicked at:', e.latlng);
        setMarker(e.latlng);
        updateAddressField(e.latlng);
    }

    map.on('click', onMapClick);

    // Handle confirming location
    document.getElementById('confirmLocation').addEventListener('click', function() {
        if (marker) {
            let latlng = marker.getLatLng();
            document.getElementById('latitude').value = latlng.lat;
            document.getElementById('longitude').value = latlng.lng;
            alert('Lokasi telah disimpan.');
            console.log('Location confirmed:', latlng);
        } else {
            alert('Silakan pilih lokasi di peta terlebih dahulu.');
            console.log('Confirm button clicked without selecting a location.');
        }
    });
        // Initialize Leaflet Control Geocoder
        L.Control.geocoder({
        defaultMarkGeocode: false
    })
    .on('markgeocode', function(e) {
        console.log('Geocode event triggered');
        var latlng = e.geocode.center;
        setMarker(latlng);
        map.setView(latlng, 13);
        updateAddressField(latlng);
    })
    .addTo(map);

    // Add "Show My Location" button as a Leaflet control
    L.Control.ShowMyLocation = L.Control.extend({
        onAdd: function(map) {
            var container = L.DomUtil.create('div', 'show-my-location-button leaflet-bar');
            var btn = L.DomUtil.create('a', '', container);
            btn.innerHTML = '<span class="material-symbols-outlined">my_location</span>'; // Replaced emoji with Material Symbol
            btn.title = 'Show My Location';
            btn.href = '#';
            btn.style.display = 'flex';
            btn.style.alignItems = 'center';
            btn.style.justifyContent = 'center';
            btn.style.width = '30px';          // Set a fixed width
            btn.style.height = '30px';   
            btn.style.backgroundColor = '#fff';
            btn.style.padding = '10px 10px';
            btn.style.cursor = 'pointer';
            btn.style.textDecoration = 'none';
            btn.style.color = '#000';
            btn.style.fontSize = '18px';

            btn.onclick = function(e){
                e.preventDefault();
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var lat = position.coords.latitude;
                        var lng = position.coords.longitude;
                        var userLatLng = L.latLng(lat, lng);

                        console.log('User coordinates obtained:', userLatLng);

                        setMarker(userLatLng);

                        // Center the map on user's location
                        map.setView(userLatLng, 13);

                        // Reverse geocode to get address
                        console.log('Initiating reverse geocoding for user location...');
                        updateAddressField(userLatLng);
                    }, function(error) {
                        console.error('Error obtaining location:', error);
                        alert('Unable to retrieve your location.');
                    });
                } else {
                    alert('Geolocation is not supported by your browser.');
                }
            };

            return container;
        },

        onRemove: function(map) {
            // Nothing to do here
        }
    });

    // Create and add the control to the map
    L.control.showMyLocation = function(opts) {
        return new L.Control.ShowMyLocation(opts);
    }

    L.control.showMyLocation({ position: 'topright' }).addTo(map);
 </script>
    

        <!-- Failure Modal -->
        <div class="modal fade" id="failureModal" tabindex="-1" role="dialog" aria-labelledby="failureModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="failureModalLabel">Failure</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        There was an error submitting your form. Please try again.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>



      </body>
      </html>
