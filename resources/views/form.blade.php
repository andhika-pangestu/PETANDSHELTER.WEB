<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetandShelter | Form Adopsi</title>
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
    <div class="row">
        <div class="col-12 d-flex align-items-center mt-3">
            <!-- Tombol Back di Kiri -->
            <button onclick="history.back()" class="btn btn-light">
                <i class="fas fa-arrow-left fa-xl"></i>
            </button>
            <!-- Breadcrumb di Kanan -->
            <nav aria-label="breadcrumb" class="ms-auto">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Shelter</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Adopsi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-4">
            <h3 class="text-black fw-bold">Cimekar Shelter</h3>
        </div>
    </div>
{{-- section2 --}}
    <div class="card">
        <h5 class="card-header">American-Ringtail</h5>
        <div class="card-body">
          <p class="card-text lh-lg">Cemong adalah kucing American Ringtail yang memiliki ciri khas ekor melingkar atau berbentuk cincin. 
            Bulunya lembut dan tebal dengan warna dominan abu-abu, dilengkapi dengan mata yang besar dan ekspresif. American Ringtail dikenal sebagai kucing yang cerdas, ramah, 
            dan suka bermain. Cemong adalah kucing yang menyenangkan untuk dipelihara dan akan menjadi teman setia dalam keluarga.</p>
        </div>

        <div class="justify-content-start">
                <div class="d-flex p-5">
                    <div  style="width: 300px; height: 300px; overflow: hidden;">
                        <img src="img/listpet6.webp" class="img-fluid">
                    </div>
                    <div class="ms-5 ">
                        <h4 class="fw-bold mb-4">CEMONG</h4>
                        <div class="d-flex align-items-center mb-3">
                        <p class="mb-0">Jenis Kelamin: Jantan</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                        <p class="mb-0">Warna: Putih-Abu Dominan</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                        <p class="mb-0">Umur: 5 Tahun</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                        <p class="mb-0">Vaksin: Belum Vaksin</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                        <p class="mb-0">Kesehatan: Sehat</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                        <p class="mb-0">Lokasi: Perumahan Megarahayu D3, Bandung</p>
                        </div>
                    </div>
                </div>
        </div>

    <div class="container px-5 mt-5">
    <form id="adoptionForm">
      <!-- Informasi Kontak Anda -->
      <h3 class="fw-bold">Informasi Kontak Anda</h3>
      <div class="row g-2 my-2">
        <div class="row g-2 my-2">
          <div class="col-md">
            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaLengkap" name="nama_lengkap" placeholder="Yanti Syarifah" required>
        </div>
        <div class="col-md">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="yantisyarifah@gmail.com" required>
        </div>
        </div>
        
        <div class="row g-2 my-2">
        <div class="col-md">
            <label for="alamat" class="form-label">Alamat Lengkap</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat Jalan, Kab/Kota, Provinsi, Kode Pos" required></textarea>
        </div>
        <div class="col-md">
            <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
            <input type="tel" class="form-control" id="whatsapp" name="nomor_whatsapp" placeholder="08xxxxxxxxxx" required>
        </div>
        </div>
        
        
      </div>

      <!-- Tentang Keluarga Baru Hewan -->
      <h3 class="fw-bold mt-5">Tentang Keluarga Baru Hewan</h3>
      <p class="text-body-secondary">Harap beritahu kami sedikit tentang dimana hewan ini akan tinggal (Kami tahu keadaan berubah)</p>
      <div class="row g-2 my-2">
        <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Apakah ini hewan pertama anda?</label>
          <select class="form-select" id="hewanPertama" name="hewan_pertama" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>Ya</option>
              <option>Tidak</option>
          </select>
      </div>
      
      <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Jenis rumah</label>
          <select class="form-select" id="jenisRumah" name="jenis_rumah" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>Rumah</option>
              <option>Apartemen</option>
              <option>Kost</option>
              <option>Lainnya</option>
          </select>
      </div>
      
      <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Kenapa anda tertarik mencari hewan?</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alasan_tertarik" placeholder="Tuliskan sejujurnya" required></textarea>
      </div>
      
      </div>

      <div class="row g-2 my-2">
        <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Apakah anda memiliki hewan peliharaan lainnya di rumah?</label>
          <select class="form-select" id="hewanPertama" name="hewan_lain" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>Ya</option>
              <option>Tidak</option>
          </select>
      </div>
      
      <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Kepemilikan <br> Rumah</label>
          <select class="form-select" id="jenisRumah" name="kepemilikan_rumah" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>Rumah</option>
              <option>Apartemen</option>
          </select>
      </div>
      
      <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Dimana hewan ini akan menghabiskan sebagian besar waktunya?</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="lokasi_hewan" rows="3" placeholder="Tuliskan sejujurnya" required></textarea>
      </div>
      
      </div>

      <div class="row g-2 my-2">
        <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Apakah anda telah memiliki dokter hewan?</label>
          <select class="form-select" id="dokterHewan" name="dokter_hewan" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>Ya</option>
              <option>Tidak</option>
          </select>
      </div>
      
      <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Apakah anda memiliki halaman berpagar</label>
          <select class="form-select" id="halamanBerpagar" name="halaman_berpagar" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>Ya</option>
              <option>Tidak</option>
          </select>
      </div>
      
      <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Berapa banyak orang dewasa di rumah anda?</label>
          <select class="form-select" id="jumlahOrangDewasa" name="jumlah_orang_dewasa" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
          </select>
      </div>
      
      </div>
      
      <div class="row g-2 my-2">
        <div class="col-md">
            <label for="exampleFormControlInput1" class="form-label">Berapa banyak anak kecil <br> di rumah anda?</label>
            <select class="form-select" id="banyakAnak" name="jumlah_anak" required>
                <option selected disabled>Silahkan Pilih</option>
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <!-- Dan seterusnya -->
            </select>
        </div>
    
        <div class="col-md">
            <label for="exampleFormControlInput1" class="form-label">Adakah orang di rumah yang memiliki alergi pada bulu hewan?</label>
            <select class="form-select" id="alergiBulu" name="alergi_bulu" required>
                <option selected disabled>Silahkan Pilih</option>
                <option>Ya</option>
                <option>Tidak</option>
            </select>
        </div>
    
        <div class="col-md">
            <label for="exampleFormControlInput1" class="form-label">Akankah hewan ini menjadi hewan didalam atau diluar?</label>
            <select class="form-select" id="lokasiHewan" name="lokasi_hewan" required>
                <option selected disabled>Silahkan Pilih</option>
                <option>Didalam</option>
                <option>Diluar</option>
            </select>
        </div>
    </div>
    
    <!-- Komitmen Kepemilikan-->
    <h3 class="fw-bold mt-5">Komitmen Kepemilikan</h3>
    <div class="row g-2 my-2 mb-4">
      <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label text-justify">Tempat kotoran hewan sudah akan tersedia saat hewan dibawa kerumah pada tanggal yang ditentukan di situs web. 
              Bisakah anda membawa pulang hewan ini dalam waktu 2-3 hari dari waktu tersebut? </label>
          <select class="form-select" id="bawaPulang" name="bawa_pulang" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>Ya</option>
              <option>Tidak</option>
          </select>
      </div>
  
      <div class="col-md ms-3">
          <label for="exampleFormControlInput1" class="form-label  text-justify">Hewan ini membutuhkan perawatan profesional. Setiap 3 minggu, dan biayanya Rp 250.000,00 setiap kali. 
              Kurangnya perawatan dapat menyebabkan sakit yang serius. Apakah anda berkomitmen terhadap biaya yang diperlukan ini?</label>
          <select class="form-select" id="perawatan" name="perawatan" required>
              <option selected disabled>Silahkan Pilih</option>
              <option>Ya</option>
              <option>Tidak</option>
          </select>
      </div>
  </div>
  

  <div class="row g-2 my-2">
    <div class="col-md">
        <label for="exampleFormControlInput1" class="form-label text-justify">Bisakah anda menjemput hewan anda secara langsung di Shelter Kami? *</label>
        <select class="form-select" id="jemputHewan" name="jemput_hewan" required>
            <option selected disabled>Silahkan Pilih</option>
            <option>Ya</option>
            <option>Tidak</option>
        </select>
    </div>

    <div class="col-md ms-3">
        <label for="exampleFormControlInput1" class="form-label  text-justify">Apakah anda setuju untuk memberikan kami laporan dan foto tindak lanjut dari waktu ke waktu?</label>
        <select class="form-select" id="laporanFoto" name="laporan_foto" required>
            <option selected disabled>Silahkan Pilih</option>
            <option>Ya</option>
            <option>Tidak</option>
        </select>
    </div>

    <div class="col-md ms-3">
        <label for="exampleFormControlInput1" class="form-label  text-justify">
            Apakah Anda setuju untuk menghubungi kami jika perlu mengembalikan hewan ini alasan apa pun?</label>
        <select class="form-select" id="hubungiKembali" name="hubungi_kembali" required>
            <option selected disabled>Silahkan Pilih</option>
            <option>Ya</option>
            <option>Tidak</option>
        </select>
    </div>
</div>


      <!-- Lembar Persetujuan-->
    <h3 class="fw-bold mt-5">Lembar Persetujuan</h3>
    <p class="text-body-secondary">Saya dengan ini menyatakan bahwa saya telah memilih untuk mengadopsi hewan peliharaan yang telah dipilih. Saya menyadari bahwa adopsi ini bersifat permanen dan saya bertanggung jawab penuh atas kesejahteraan hewan tersebut.</p>
    <div class="row g-2 my-2 mb-4">
        <div class="col-md text-justify">
            <p>1. Perawatan Harian:</p>
            <p>Saya akan memberikan makanan berkualitas dan segar, air minum yang bersih, serta lingkungan yang aman dan nyaman untuk hewan peliharaan saya.
                Saya akan memberikan perhatian, kasih sayang, dan interaksi sosial yang cukup sesuai dengan kebutuhan hewan peliharaan saya.
            </p>
            <p>2. Perawatan Kesehatan:</p>
            <p>Saya akan memberikan perawatan medis yang diperlukan, termasuk vaksinasi, perawatan gigi, dan perawatan kesehatan lainnya sesuai dengan petunjuk dokter hewan.
                Saya akan membawa hewan peliharaan saya ke dokter hewan secara berkala untuk pemeriksaan kesehatan rutin.
            </p>
            <p>3. Kondisi Tempat Tinggal:</p>
            <p>Saya menyediakan lingkungan yang aman dan nyaman di rumah saya untuk hewan peliharaan saya, termasuk tempat tidur yang hangat, bersih, dan kering.
                Saya akan memastikan bahwa hewan peliharaan saya memiliki akses yang cukup ke area bermain atau ruang terbuka yang aman.                    
            </p>
            <p>4. Kepatuhan Hukum:</p>
            <p>Saya akan mematuhi peraturan dan ketentuan yang berlaku di tempat tinggal saya terkait dengan kepemilikan dan perawatan hewan peliharaan.
                Saya akan memastikan bahwa hewan peliharaan saya memiliki identifikasi yang sesuai, seperti cincin identifikasi atau mikrocip, sesuai dengan peraturan yang berlaku.                 
            </p>
        </div>

        <div class="col-md text-justify ms-3">
            <p>5. Perawatan Selama Liburan atau Kehilangan:</p>
                <p>Saya akan membuat pengaturan yang tepat untuk merawat hewan peliharaan saya saat saya pergi liburan atau tidak dapat merawatnya sendiri. Saya juga akan memberikan informasi kontak darurat kepada orang-orang yang dapat merawat hewan peliharaan jika saya tidak bisa merawatnya sendiri.
                    </p>
                <p>6. Pemutusan Kontrak:</p>
                <p>Saya memahami bahwa adopsi hewan ini bersifat permanen, namun jika terjadi keadaan yang mengharuskan saya untuk tidak lagi merawat hewan peliharaan ini, saya akan mengembalikannya kepada pihak yang mengadopsi atau ke pihak yang berwenang.
                </p>
                <p>7. Kunjungan dan Peninjauan:</p>
                <p>Saya setuju untuk memperbolehkan pihak yang mengadopsi untuk melakukan kunjungan atau peninjauan ke rumah saya untuk memastikan kesejahteraan hewan peliharaan saya. Ini penting demi kebahagiaan dan kesehatan hewan peliharaan yang saya adopsi.
                </p>
                <p>8. Pembaruan Informasi:</p>
                <p>Saya akan memberikan informasi kontak yang dapat dihubungi kepada pihak yang mengadopsi untuk keperluan pembaruan atau komunikasi terkait hewan peliharaan saya.
                    Saya dengan ini mengonfirmasi bahwa informasi yang saya berikan di atas adalah benar dan saya siap untuk mematuhi persyaratan dan tanggung jawab yang tercantum dalam lembar persetujuan ini.</p>
        </div>
      </div>

      <div class="row g-2 my-2">
        <div class="col-md">
          <label for="exampleFormControlInput1" class="form-label">Berikan informasi relevan yang menurut Anda akan membantu kami dalam menempatkan hewan di rumah anda!</label>
          <textarea class="form-control" id="informasiRelevan" name="informasi_relevan" rows="3" placeholder="Tuliskan sejujurnya" required></textarea>
      </div>
      
      <div class="col-md ms-3">
          <label for="exampleFormControlInput1" class="form-label">Apakah Anda memiliki pertanyaan lain yang ingin Anda ajukan kepada kami atau ada informasi tambahan yang Anda butuhkan terkait Adopsi ini? </label>
          <textarea class="form-control" id="pertanyaanTambahan" name="pertanyaan_tambahan" rows="3" placeholder="Tuliskan sejujurnya" required></textarea>
      </div>
      

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
        <div class="d-flex justify-content-end my-5">
            <button type="submit" class="btn btn-primary text-white">Kirim Form</button>
          </div>
      </div>
    </form>
  </div>
</div> <!--continer section2-->       
</div>
</div>
{{-- footer --}}
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
</script>

</body>
</html>