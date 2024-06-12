<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet and Shelter</title>
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/styleDashboard.css">
    <link rel="stylesheet" href="css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<nav>
    <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Dashboard</span>
    </div>
    <div class="sidebar">
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Pet and Shelter</span>
        </div>
        <div class="sidebar-content">
            <ul class="lists">
                <li class="list">
                    <a href="{{ route('mitra.shelter.index') }}" class="nav-link">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="link">Dashboard</span>
                    </a>
                </li>
                
                <li class="list">
                    <a href="{{ route('mitra.shelter.index') }}" class="nav-link">
                        <i class='bx bx-calendar-event icon' ></i>
                        <span class="link">Shelter</span>
                    </a>
                </li>
                <li class="list">
                    <a href="{{ route('mitra.adopsi.index') }}" class="nav-link">
                        <i class="fa-solid fa-house-medical icon"></i>
                        <span class="link">Adopsi</span>
                    </a>
                </li>
                <li class="list">
                    <a href="{{ route('mitra.hewan.index') }}" class="nav-link">
                        <i class="fa-solid fa-paw icon"></i>
                        <span class="link">Daftar Hewan</span>
                    </a>
                </li>
                <li class="list">
                    <a href="{{ url('/mitra/approved-adopsi') }}" class="nav-link">
                        <i class="fa-solid fa-user-check icon"></i>
                        <span class="link">Cek Status</span>
                    </a>
                </li>
                <!-- Add more list items here -->
            </ul>
            <div class="bottom-content">
                <li class="list">
                    <a href="{{ route('mitra.shelter.index') }}" class="nav-link">
                        <i class="bx bx-user icon"></i>
                        <span class="link">Profile</span>
                    </a>
                    
                </li>
                <li class="list">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-log-out icon"></i>
                        <span class="link">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </div>
</nav>
<section class="overlay"></section>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script>
    const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

    menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
            navBar.classList.toggle("open");
        });
    });

    overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
    });
</script>
<script src="script.js"></script>