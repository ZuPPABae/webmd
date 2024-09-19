<style>
    html {
        font-size: 85%;
    }

    .navbar-brand img {
        max-width: 120px;
        width: 100%;
        height: auto;
    }

    .navbar .container {
        margin: 0 auto;
        padding: 0 10px;
    }

    .navbar-nav:first-child {
        gap: 50px;
    }

    .navbar-nav:last-child {
        gap: 20px;
    }

    .nav-item .nav-link:hover,
    .nav-item .nav-link.active {
        color: #688e4e;
    }

    .navbar-toggler {
        border: none;
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
    }

    .navbar-toggler-icon {
        width: 1.5em;
        height: 1.5em;
    }

    .profile-picture {
        width: 40px;
        height: 40px;
    }

    .navbar .btn-success {
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
    }

    .notif .badge {
        font-size: 0.75rem;
        padding: 0.25em 0.4em;
    }

    /* Tablet */
    @media (max-width: 990px) {
        html {
            font-size: 75%;
        }

        .navbar-nav:first-child {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            padding: 10px 18px;
        }

        .navbar-nav:last-child {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin: 10px 0;
            padding: 0 12px;
        }

        .navbar-nav .nav-item {
            margin: 2px 0;
        }

        .notif {
            margin-top: 0;
        }
    }

    @media (max-width: 650px) {
        .navbar-brand img {
            max-width: 80px;
        }
    }

    /* Mobile Phone */
    @media (max-width: 450px) {
        html {
            font-size: 55%;
        }
    }
</style>

<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #333333">
    <div class="container">
        <a class="navbar-brand me-1" href="/"><img src="{{ asset('img/LOGO.png') }}" alt="icon"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto fs-5 fw-semibold">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page"
                        href="/">@lang('users.navberanda')</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'shop' ? 'active' : '' }}"
                        href="{{ route('shop') }}">@lang('users.navproduk')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'about' ? 'active' : '' }}"
                        href="{{ route('about') }}">@lang('users.navtentang')</a>
                </li> --}}
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a href="{{ route('profile.edit') }}" class="select" tabindex="0" role="button"
                            style="text-decoration:none">
                            <div class="d-flex gap-2 align-items-center">
                                <img src="{{ Storage::url(Auth::user()->foto) }}" class="rounded-circle profile-picture"
                                    alt="">
                                <div class="d-flex flex-column">
                                    <p class="m-0" style="font-weight: 700; font-size:14px; color:#ddd">
                                        {{ Auth::user()->name }}
                                    </p>
                                    <p class="m-0" style="font-size:12px; color:rgb(154, 154, 154)">
                                        {{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </a>
                    </li>
                @else
                    <li class="nav-item my-auto">
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-success"><i class="fa-solid fa-user"></i></button></a>
                    </li>
                @endauth
                {{-- <li class="nav-item">
                    <div class="notif">
                        <a href="{{ route('transaksi') }}"
                            class="fs-5 nav-link {{ Request::path() == 'transaksi' ? 'active' : '' }}">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                        @if ($count)
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ $count }}
                            </span>
                        @endif
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>

<script>
    // // For Navbar Animations
    // const navBar = document.querySelector('nav');
    // let prevScrollPos = window.scrollY;

    // // Media query to check if screen width is less than 540px
    // const mediaQuery = window.matchMedia('(max-width: 540px)');

    // // Function to handle scroll animation
    // const handleScroll = () => {
    //     let currScrollPos = window.scrollY;

    //     if (currScrollPos > prevScrollPos && !mediaQuery.matches) {
    //         navBar.style.transition = 'transform 1s ease';
    //         navBar.style.transform = `translateY(-100%)`;
    //     } else {
    //         navBar.style.transition = 'transform 0.8s ease';
    //         navBar.style.transform = `translateY(0%)`;
    //     }

    //     prevScrollPos = currScrollPos;
    // };

    // // Add event listener for scroll event
    // window.addEventListener('scroll', handleScroll);

    // // Add event listener for media query changes
    // mediaQuery.addListener((event) => {
    //     if (event.matches) {
    //         navBar.style.transition = '';
    //         navBar.style.transform = '';
    //     }
    // });
</script>
