<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-master.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <div class="custom-nav fixed-top py-3 shadow-sm">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex">
                            <div>
                                <i class="fas fa-bars" onclick="openMenu()"></i>
                            </div>
                            <div class="ml-auto">
                                <p class="mb-0 text-capitalize">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="break"></div>

        <!-- side menu -->
        <div class="side-menu shadow-sm" id="sideMenu">
            <div class="text-right close-icon">
                <i class="fas fa-times" onclick="closeMenu()"></i>
            </div>
            <div class="links">
                <a href="{{ url('/home') }}" class="btn btn-block rounded-0 shadow-none">Dashboard</a>
                <a href="{{ url('admin/team') }}" class="btn btn-block rounded-0 shadow-none">Team</a>
                <a href="{{ url('admin/blog') }}" class="btn btn-block rounded-0 shadow-none">News</a>
                <a href="{{ url('admin/streaming') }}" class="btn btn-block rounded-0 shadow-none">Streaming</a>
                <a href="{{ url('admin/about-contact') }}" class="btn btn-block rounded-0 shadow-none">About-Contact</a>
                <a href="{{ url('/logout') }}" class="btn btn-block rounded-0 shadow-none">Logout</a>
            </div>
        </div>

        <main>
            @yield('content')
        </main>
    </div>


    <!-- Script -->
    <script type="text/javascript">
    document.getElementById("sideMenu").style.left = "-100%";

    function openMenu() {
        document.getElementById("sideMenu").style.left = "0%";
    }

    function closeMenu() {
        document.getElementById("sideMenu").style.left = "-100%";
    }
    </script>
</body>

</html>