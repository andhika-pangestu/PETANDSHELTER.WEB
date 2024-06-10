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
                    <a href="#" class="nav-link">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="link">Dashboard</span>
                    </a>
                </li>
                <li class="list">
                    <a href="{{ route('profile.edit') }}" class="nav-link">
                        <i class="bx bx-user icon"></i>
                        <span class="link">Profile</span>
                    </a>
                </li>
                <li class="list">
                    <a href="{{ route('admin.tips') }}" class="nav-link">
                        <i class="bx bx-user icon"></i>
                        <span class="link">Tips</span>
                    </a>
                </li>
                <!-- Add more list items here -->
            </ul>
            <div class="bottom-content">
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class="bx bx-cog icon"></i>
                        <span class="link">Settings</span>
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