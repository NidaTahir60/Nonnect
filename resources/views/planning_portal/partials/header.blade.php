<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo@2x.png') }}" alt="" class="default-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo@2x.png') }}" alt="" class="alt-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo@2x.png') }}" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#feature" class="nav-link">Feature</a></li>
                        <li class="nav-item"><a href="#testimonials" class="nav-link">Testimonials</a></li>
                        <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
                        {{-- <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                <div class="header-icon">
                    <div class="header-button">
                        <a href="#contact" class="btn btn-small btn-switch-text btn-base-color left-icon btn-round-edge btn-box-shadow">
                            <span>
                                <span class="btn-double-text" data-text="Get In Touch">Get In Touch</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
