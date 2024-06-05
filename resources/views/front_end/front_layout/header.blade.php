<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="index.html">
                        <h1>JusticeJuorney</h1>
                        <!-- <img src="img/logo.jpg" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="top-bar-right">
                    <div class="text">
                        <h2>8:00Am - 9:00PM</h2>
                        <p>Opening Hour Mon - Fri</p>
                    </div>
                    <div class="text">
                        <h2>+123 456 7890</h2>
                        <p>Call Us For Free Consultation</p>
                    </div>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ url('/dashboard') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/fabout') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('/service') }}" class="nav-item nav-link">Practice</a>
                    <a href="{{ url('/team') }}" class="nav-item nav-link">Attorneys</a>
                    <a href="{{ url('/portfolioo') }}" class="nav-item nav-link">Case Studies</a>

                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>
                            </a>
                            <a href="#" class="dropdown-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </a>
                        </div>
                        <!-- <a href="{{ url('/lawyerappoint') }}" class="nav-item nav-link">Lawyer Add Profile</a> -->
                    </div>
                   
                </div>
                <div class="ml-auto">

                    <a class="btn" href="{{url('/appoint')}}">Get Appointment</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->