<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app_name', 'Giggle') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/giggle-logo.svg')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Box Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Style -->
    <link rel="stylesheet" href="{{asset ('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/frontend.css')}}">

</head>

<body>
    <div id="app">
        @include('layouts.include.frontend.navbar')


        <main class="pt-4">
            @yield('content')
        </main>
    </div>

    <!--  Script -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Jquery -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- hover profile -->
    <script>
        $(document).ready(function() {
            $('.nav-item.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
            });
        });
    </script>

    <!-- modal -->
    <script>
        $(document).ready(function() {
            $('.modal-story').click(function() {
                $('#exampleModalCenter').modal('show');
            });
        });
    </script>

    <!-- Inisialisasi Carousel -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var myCarousel = document.getElementById('carouselExampleControls');
            var carousel = new bootstrap.Carousel(myCarousel);
        });
    </script>
</body>

</html>