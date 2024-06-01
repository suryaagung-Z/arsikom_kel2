<div class="fables-transparent py-3 py-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 pr-md-0">
                <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                    <a class="navbar-brand logolupdate-brand pl-0" href="/"><img
                            src="assets/custom/images/logolupdate.png" alt="Fables Template" class="logolupdate"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown"
                        aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fables-iconmenu-icon text-white font-16"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="fablesNavDropdown">

                        <ul class="navbar-nav mx-auto fables-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ Request::routeIs('home') ? 'text-danger' : '' }}"
                                    href="{{ route('home') }}" id="sub-nav1">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ Request::routeIs('about') ? 'text-danger' : '' }}"
                                    href="{{ route('about') }}" id="sub-nav3">
                                    About
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ Request::routeIs('blog') ? 'text-danger' : '' }}"
                                    href="{{ route('blog') }}" id="sub-nav5">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="sub-nav7" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Contact Us
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
            <div class="col-5 col-md-2 pr-md-0 icons-header-mobile">
                <div class="fables-header-icons pt-lg-4 text-right">
                    <a href="#"
                        class="open-search fables-third-text-color fables-mega-menu-btn px-4  fables-second-hover-color">
                        <span class="fables-iconsearch-icon"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>