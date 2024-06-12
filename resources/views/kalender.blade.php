<x-app-layout>
  <x-slot name="acara">
   
  </x-slot>
  @include('navigation')
  {{-- Section1 --}}
  <div class="container col-xxl-10 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-lg-8">
        <h1 class="display-3 text-primary ms-4 fw-bold lh-1 mb-3">Catat Setiap Kegembiraan Bersama Pet Calendar Kami!</h1>
      </div>
      <div class="col-lg-4">
        <img src="{{ asset('img/pet.png') }}" class="d-block mx-lg-auto img-fluid" alt="Gambar Hewan" loading="lazy">
      </div>
    </div>
  </div>
  
  <!-- Section Card Utama -->
  @if($acara->isNotEmpty())
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-9">
          <div class="card mb-3 rounded-5 h-100">
            <div class="row g-0 h-100">
              <div class="col-md-4">
                <img src="{{ Storage::url($acara->first()->gambar) }}" class="img-fluid rounded-start-5 h-100" alt="Gambar Hewan" style="object-fit: cover;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h6 class="text-sm fw-bold">{{ \Carbon\Carbon::parse($acara->first()->tanggal)->format('l, d F') }} • {{ \Carbon\Carbon::parse($acara->first()->waktu)->format('H:i') }} WIB</h6>
                  <h5 class="fs-4 fw-bold">{{ $acara->first()->judul }}</h5>
                  <p class="card-text text-justify">
                    <span class="short-description">{{ \Illuminate\Support\Str::words($acara->first()->deskripsi, 80, '') }}</span>
                    <span class="full-description d-none">{{ $acara->first()->deskripsi }}</span>
                    @if (str_word_count($acara->first()->deskripsi) > 80)
                      ... <a href="#" class="text-decoration-none read-more" onclick="toggleDescription(event, true)">Baca Selengkapnya</a>
                      <a href="#" class="text-decoration-none read-less d-none" onclick="toggleDescription(event, false)">Tutup</a>
                    @endif
                  </p>
                  <p class="card-text small">
                    <i class="fa-solid fa-location-dot fa-flip"></i> {{ $acara->first()->lokasi }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
  
  <!-- Section Lainnya -->
  <div class="container py-5">
    <div class="row justify-content-center">
      @foreach ($acara->slice(1) as $item)
      <div class="col-12 col-md-6 my-3">
        <div class="card mb-3 rounded-5 h-100">
          <div class="row g-0 h-100">
            <div class="col-md-4">
              <img src="{{ Storage::url($item->gambar) }}" class="card-img-top img-fluid rounded-start-5 h-100" alt="{{ $item->judul }}">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="text-sm fw-bold">{{ \Carbon\Carbon::parse($item->tanggal)->format('l, d F') }} • {{ \Carbon\Carbon::parse($item->waktu)->format('H:i') }} WIB</h6>
                <h5 class="fs-3 fw-bold">{{ $item->judul }}</h5>
                <p class="card-text small text-justify">
                  <span class="short-description">{{ \Illuminate\Support\Str::words($item->deskripsi, 30, '') }}</span>
                  <span class="full-description d-none">{{ $item->deskripsi }}</span>
                  @if (str_word_count($item->deskripsi) > 30)
                    ... <a href="#" class="text-decoration-none read-more" onclick="toggleDescription(event, true)">Baca Selengkapnya</a>
                    <a href="#" class="text-decoration-none read-less d-none" onclick="toggleDescription(event, false)">Tutup</a>
                  @endif
                </p>
                <p class="card-text small">
                  <i class="fa-solid fa-location-dot fa-flip"></i> {{ $item->lokasi }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
  <script>
    function toggleDescription(event, showFull) {
      event.preventDefault();
      const link = event.target;
      const cardBody = link.closest('.card-body');
      const shortDescription = cardBody.querySelector('.short-description');
      const fullDescription = cardBody.querySelector('.full-description');
      const readMoreLink = cardBody.querySelector('.read-more');
      const readLessLink = cardBody.querySelector('.read-less');
  
      if (showFull) {
        shortDescription.classList.add('d-none');
        fullDescription.classList.remove('d-none');
        readMoreLink.classList.add('d-none');
        readLessLink.classList.remove('d-none');
      } else {
        shortDescription.classList.remove('d-none');
        fullDescription.classList.add('d-none');
        readMoreLink.classList.remove('d-none');
        readLessLink.classList.add('d-none');
      }
    }
  </script>
  </x-app-layout>
  