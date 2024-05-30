<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/icon.png') }}" alt="Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ url('/about') }}">Tentang</a>
                <a class="nav-link" href="{{ url('/donasi') }}">Donasi</a>
                <a class="nav-link" href="{{ url('/adopsi') }}">Adopsi</a>
                <a class="nav-link" href="{{ url('/kalender') }}">Acara</a>
                <a class="nav-link" href="{{ url('/shelter') }}">Shelter</a>
                <a class="nav-link" href="{{ url('/tips') }}">Tips</a>
                <a class="nav-link" href="{{ url('/rescue') }}">Rescue</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toggler = document.querySelector(".navbar-toggler");
        toggler.addEventListener("click", function() {
            var navbarCollapse = document.querySelector(".navbar-collapse");
            navbarCollapse.classList.toggle("show");
        });
    });
</script>
