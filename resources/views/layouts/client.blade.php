<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/float-panel.js') }}"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client.css') }}" rel="stylesheet">
    <link href="{{ asset('css/events.css') }}" rel="stylesheet">
    <link href="{{ asset('css/team.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registration.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <div class="custom-nav fixed-top float-panel" data-top="0" data-scroll="100">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-6">
                    <a href="{{url('/')}}" class="d-none d-lg-block"><img src="{{asset('static/logo.png')}}"
                            class="brand"></a>
                    <i class="fas fa-bars d-lg-none bars" onclick="openMenu()"></i>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <a href="{{url('/')}}" class="d-lg-none"><img src="{{asset('static/logo.png')}}"
                                class="brand"></a>
                    </div>
                    <div class="page-links d-none d-lg-block">
                        <a href="{{url('/')}}">home</a>
                        <a href="{{url('/events')}}">events</a>
                        <a href="{{url('/team')}}">team</a>
                        <a href="{{url('/about')}}">about</a>
                        <a href="{{url('/join-with-us')}}">join with us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Menu -->
    <div class="client-side-menu d-lg-none shadow-sm" id="sideMenu">
        <div class="close-box text-right">
            <i class="fas fa-times" onclick="closeMenu()"></i>
        </div>
        <div class="route-links">
            <a href="{{url('/')}}" class="btn btn-block shadow-none">Home</a>
            <a href="{{url('/events')}}" class="btn btn-block shadow-none">events</a>
            <a href="{{url('/team')}}" class="btn btn-block shadow-none">team</a>
            <a href="{{url('/about')}}" class="btn btn-block shadow-none">about</a>
            <a href="{{url('/join-with-us')}}" class="btn btn-block shadow-none">join with us</a>
        </div>
    </div>

    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <div class="custom-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-3 mb-lg-5">TiTanesports</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe ad ea explicabo recusandae
                        quibusdam laborum vero, sint distinctio reprehenderit molestias.</p>
                </div>
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-3 mb-lg-5">Contact Info</h4>
                    <p class="text-capitalize mb-2">Address: Dattapara, Ashulia, Savar, Dhaka</p>
                    <p class="text-capitalize mb-2">phone: +8801533592610</p>
                    <p class="mb-2">Email: example@gmail.com</p>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <h4 class="mb-3 mb-lg-5">Connect Us</h4>
                    <div class="links">
                        <a href=""><i class="fab fa-facebook-f facebook"></i></a>
                        <a href=""><i class="fab fa-instagram instagram"></i></a>
                        <a href=""><i class="fab fa-discord discord"></i></a>
                        <a href=""><i class="fas fa-envelope envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mt-lg-5">
                <div class="col-12 text-center">
                    <p class="mb-0">All right reserverd & develop by <a target="_blank"
                            href="https://www.linkedin.com/in/mamun-swe/">Abdullah Al Mamun</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Side Menu
    document.getElementById("sideMenu").style.left = "-100%";

    function openMenu() {
        document.getElementById("sideMenu").style.left = "0%";
    }

    function closeMenu() {
        document.getElementById("sideMenu").style.left = "-100%";
    }
    // Video show modal
    document.getElementById("modal").style.display = "none";

    function showVideo() {
        document.getElementById("modal").style.display = "block";
    }

    function closeVideo() {
        document.getElementById("modal").style.display = "none";
    }
    </script>
</body>

</html>