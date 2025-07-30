<nav class="navbar navbar-expand-lg navbar-light app-bg-primary-color ">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
        </a>

        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link lato-regular f-16 p-3 {{ request()->is('/') ? 'active' : '' }}"
                       href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link lato-regular f-16 p-3 {{ request()->is('about-us') ? 'active' : '' }}"
                                        href="{{ url('/about-us') }}">
                        About Us</a></li>
                <li class="nav-item"><a class="nav-link lato-regular f-16 p-3" href="#">Book Now</a></li>
                <li class="nav-item"><a class="nav-link lato-regular f-16 p-3" href="#">Pricing</a></li>
                <li class="nav-item"><a class="nav-link lato-regular f-16 p-3" href="#">Contact Us</a></li>
            </ul>
            <!-- CTA Button -->
            <a href="#" class="btn btn-primary app-btn px-4">Get the App</a>
        </div>
    </div>
</nav>
