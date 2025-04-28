<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#book-table">Order Now</a>
            </li>
        </ul>

        <a class="navbar-brand m-auto" href="#">
            <img src="assets/imgs/logo.png" class="brand-img" alt="">
            <span class="brand-txt">Sweet & Savory Fusion</span>
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#blog">Blog</a>
            </li>
            @if (Route::has('login'))

            @auth

            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <input class="btn btn-primary ml-xl-4" type="submit" value="Logout">
            </form>

            @else

            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>

             @endauth
            @endif

        </ul>
    </div>
</nav>

<!-- Header -->
<header id="home" class="header">
    <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3">Sweet & Savory Fusion</h1>
        <h2 class="display-4 mb-5">Baked with love, delivered with care</h2>
        <a class="btn btn-lg btn-primary" href="#gallary">View Our Creations</a>
    </div>
</header>
