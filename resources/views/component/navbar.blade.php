<div class="{{ Request::routeIs('home') ? 'fables-transparent' : '' }} py-3 py-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 pr-md-0">
                <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                    <a class="navbar-brand logolupdate-brand pl-0" href="/"><img
                            src="/assets/custom/images/logolupdate.png" alt="Fables Template" class="logolupdate"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown"
                        aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fables-iconmenu-icon text-white font-16"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="fablesNavDropdown">
                        <ul class="navbar-nav mx-auto fables-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ Request::routeIs('home') ? 'text-danger' : '' }}"
                                    href="{{ route('home') }}" id="sub-nav1"
                                    style="{{ Request::routeIs('home') ? '' : 'color: black;' }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ Request::routeIs('about') ? 'text-danger' : '' }}"
                                    href="{{ route('about') }}" id="sub-nav3"
                                    style="{{ Request::routeIs('home') ? '' : 'color: black;' }}">
                                    About
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ Request::routeIs('laptop.index') ? 'text-danger' : '' }}"
                                    href="{{ route('laptop.index') }}" id="sub-nav5"
                                    style="{{ Request::routeIs('home') ? '' : 'color: black;' }}">
                                    Laptop
                                </a>
                            </li>

                        </ul>
                    </div>

                </nav>
            </div>

        </div>
    </div>
</div>