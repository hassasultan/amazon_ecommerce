<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" inte
        grity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/viewsicon.css') }}" rel="stylesheet" type="text/css" media="all" />

    <link href="{{ asset('assets/css/collection-template.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/theme-custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/skin-theme.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/swatch-color.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/front.style.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- Latest compiled and minified CSS -->


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-2/css/all.min.css" integrity="sha512-61a6zi50gYXGgd/n9+ZT2/RKnXr6lkRoWlS88AjFdoUHaIDnyBAcoE0Vs/QDU3lK3nCcUowNDqmQ8WaV0yT4qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        body {
            color: var(--font-color-body);
            font-size: var(--font-size-body);
            background-color: var(--background-color-body);
            font-family: 'Manrope', sans-serif;
            font-weight: 400;
            font-style: normal;
            letter-spacing: var(--font-letter-spacing-body);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--font-color-header);
            font-family: 'Manrope', sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .section-title h2,
        .content-main-title h2,
        .my-account-page .page-title h2 {
            color: var(--font-color-section-header);
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            font-style: normal;
            text-transform: uppercase;
        }

        p {
            color: var(--font-color-paragraph);
            font-family: 'Manrope', sans-serif;
            font-weight: 400;
            font-style: normal;
            line-height: var(--font-line-height-paragraph);
        }
    </style>
    <!-- JS -->
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <!-- Ajax Cart js -->
    <script src="{{ asset('assets/js/option_selection-9f517843f664ad329c689020fb1e45d03cac979f64b9eb1651ea32858b0ff452.js') }}">
    </script>
    <script src="{{ asset('assets/js/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js') }}">
    </script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js') }}"
        type="text/javascript"></script>


</head>

<body id="electon6-store" class="template-index">
    <div class="preloader"></div>
    <script>
        $(window).on('load', function() {
            $('.preloader').fadeOut('slow');
        });
    </script>
    <style>
        .preloader {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #FFFFFF;
            z-index: 4;
        }
    </style>
    <div id="shopify-section-top-nocification-bar" class="shopify-section">
        @include('layouts.include.top-header')
    </div>
    <div id="shopify-section-header" class="shopify-section">
        @include('layouts.include.header')
    </div>

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    <main role="main">
        @yield('content')
    </main>
    <div class="mm-fullscreen-bg"></div>
    <style>
        .mm-fullscreen-bg {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 4;
            opacity: 0;
            visibility: hidden;
        }

        .mm-fullscreen-bg.active {
            opacity: 1;
            visibility: visible;
        }

        .mm-fullscreen-bg,
        .mm-fullscreen-bg.active {
            -webkit-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }
    </style>
    @include('layouts.include.footer')
    <script type="text/javascript" src="{{ asset('assets/js/timber.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cart.api.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/wishlist.js')}}"></script>

    {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/public/js/app.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('assets/user_dashboard/js/sweetalert.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/user_dashboard/js/summernote.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/user_dashboard/js/custom.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/user_dashboard/js/jquery.dataTables.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/user_dashboard/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/user_dashboard/js/dataTables.responsive.min.js') }}"></script> --}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="{{ asset('assets/user_dashboard/js/responsive.bootstrap4.min.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

</body>

</html>
