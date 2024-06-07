<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand d-flex gap-3 align-items-center me-5" href="{{route('landing-page')}}">
            <img src="{{ asset ('assets/images/giggle-logo.svg') }}" alt="">
            <h3 class="bingah text-primary mb-0">Giggle</h3>
        </a>
        <!-- Search form -->
        <form class="input-group" style="width: 380px">
            <input type="search" class="search-bar form-control" placeholder="Cerita Fantasi" aria-label="Cari" />
            <button class="btn btn-pink btn-text-white" type="button" data-mdb-ripple-color="dark" style="padding: .45rem 1.5rem .35rem;">
                Cari
            </button>
        </form>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-bs-target="#navbarSupportedContent" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class='bx bx-menu-alt-right menu-icon'></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active d-flex flex-column text-center" aria-current="page" href="{{route('landing-page')}}"><i class="fas fa-home fa-lg"></i><span class="">Discover</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex flex-column text-center" aria-current="page" href="{{ route('categories') }}"><i class="fas fa-user-friends fa-lg"></i><span class="">Kategori</span></a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link d-flex flex-column text-center" aria-current="page" href="{{ route('stories-trending') }}"><i class="fas fa-briefcase fa-lg "></i><span class="">Cerita Populer</span></a>
                </li>
                </li>
                @guest
                @if (Route::has('login'))
                <li class="nav-item btn-blue-outline me-2">
                    <a class="nav-link btn-text-blue" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item btn-blue btn-blue-outline ">
                    <a class="nav-link btn-text-white" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-user-circle display-6'></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 62px, 0px);" data-popper-placement="bottom-end">
                        <li class="dropdown-item d-block flex-column justify-content-center">
                            <img src="{{ asset ('assets/icons/user-circle.svg') }}" class="rounded-circle" height="50" width="50" alt="" loading="lazy" />
                            <a href="" class="text-decoration-none text-dark">{{ Auth::user()->name }}</a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="#"><i class='bx bx-user'></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class='bx bx-library'></i> My Library</a></li>
                        <li><a class="dropdown-item" href="{{route('save')}}"><i class='bx bx-book-heart'></i> My Favorite</a></li>

                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
 document.getElementById('logout-form').submit();">
                                <i class='bx bx-log-out'></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
                <li class="nav-item dropdown">

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>

            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->