<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ route('app.welcome') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
            </a>
            <button class="navbar-burger" type="button" onclick="toggleNavbarMenu()"><x-icons.menu /></button>
        </div>
        <div id="navbar-menus" class="navbar-menus">
            <ul class="navbar-menu right-menu">
                <li class="navbar-menu-item"><a href="#">Blog</a></li>
                <li class="navbar-menu-item"><a href="{{ route('app.about') }}">About Us</a></li>
                <li class="navbar-menu-item"><a href="#">Profile</a></li>
                <li class="navbar-menu-item"><a href="#">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
