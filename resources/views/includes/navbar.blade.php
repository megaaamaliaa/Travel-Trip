<div class="container">
    <nav class="navbar navbar-light navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ url('frontend/images/logo.png') }}" alt="Logo Nomads" />
        </a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#popular">Our Packages</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#section-testimonial-heading">Testimonial</a>
            </li>
        </ul>

        @guest
         <!-- mobile button -->
        <form class="form-inline d-sm-block d-md-none">
            @csrf
            <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
            onclick="event.preventDefault(); location.href='{{ url('login') }}';">
            Login
            </button>
        </form>

        <!-- desktop button -->
        <form class="form-inline my-2 my-lg-0 d-md-block d-none">
            @csrf
            <button
            class="btn btn-login btn-navbar-right my-sm-0 px-4"
            type="button"
            onclick="event.preventDefault(); location.href='{{url('login') }}';">
            Login
            </button>
        </form>
        @endguest

        @auth
            <!-- mobile button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST" >
                @csrf
                <button class="btn btn-login my-2 my-sm-0 px-4" type="submit" >
                Logout
                </button>
            </form>

            <!-- desktop button -->
            <form class="form-inline my-2 my-lg-0 d-md-block d-none" action="{{ url('logout') }}" method="POST" >
                @csrf
                <button
                class="btn btn-login btn-navbar-right my-sm-0 px-4" type="submit" >
                Logout
                </button>
            </form>
        @endauth
        </div>
    </div>
    </nav>
</div>
