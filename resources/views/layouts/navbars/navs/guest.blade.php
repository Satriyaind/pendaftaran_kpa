<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container px-4">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/argon') }}/img/brand/isbi.png" style="width: 50px; height: auto;" class="mr-2"/>
            <img src="{{ asset('assets/argon') }}/img/brand/kpa-24-2.png" style="width:80px; height: 40px;"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            <img src="{{ asset('assets/argon') }}/img/brand/isbi.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color:  #0e80eb;" href="/">
                        <i class="fa fa-home mr-1"></i>
                        <span class="nav-link-inner--text"><strong>{{ __('Beranda') }}</strong></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:  #0e80eb;" href="/informasi_pendaftar">
                        <i class="fa fa-id-card mr-1"></i>
                        <span class="nav-link-inner--text"><strong>{{ __('Informasi Pendaftaran') }}</strong></span>
                    </a>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <i class="ni ni-key-25"></i>
                        <span class="nav-link-inner--text">{{ __('Login') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <i class="ni ni-single-02"></i>
                        <span class="nav-link-inner--text">{{ __('Profile') }}</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>