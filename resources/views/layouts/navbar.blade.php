<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top bg-white">
    <div class="container">
        <a class="navbar-brand me-auto" href="{{ url('/') }}">
            <img src="{{ asset('img/icon-black.png') }}" alt="Logo" class="navbar-logo img-fluid " style="max-width: 60px; height: auto;">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="navbar-nav ms-auto ">
                    <a class="nav-link mx-2 fs-6 {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                    <a class="nav-link mx-2 fs-6 {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Tentang</a>
                    <a class="nav-link mx-2 fs-6 {{ request()->is('donasi') ? 'active' : '' }}" href="{{ url('/donasi') }}">Donasi</a>
                    <a class="nav-link mx-2 fs-6{{ request()->is('adopsi') ? 'active' : '' }}" href="{{ url('/adopsi') }}">Adopsi</a>
                    <a class="nav-link mx-2 fs-6 {{ request()->is('kalender') ? 'active' : '' }}" href="{{ url('/kalender') }}">Acara</a>
                    <a class="nav-link mx-2  fs-6{{ request()->is('shelter') ? 'active' : '' }}" href="{{ url('/shelter') }}">Shelter</a>
                    <a class="nav-link mx-2 fs-6{{ request()->is('tips') ? 'active' : '' }}" href="{{ url('/tips') }}">Tips</a>
                    <a class="nav-link mx-2  fs-6{{ request()->is('rescue') ? 'active' : '' }} nav-link-primary" href="{{ url('/rescue') }}">Rescue</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'))
    var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
        return new bootstrap.Offcanvas(offcanvasEl)
    })
</script>