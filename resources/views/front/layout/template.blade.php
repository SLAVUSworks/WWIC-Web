
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="SLAVUSworks" />
        @stack('meta')
        <title>@yield('nama-tab') - Development Phase</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('front/img/favicon.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" />
        @stack('css')
    </head>
    <body>
        @include('front.layout.navbar')
        <div class="bg">
            @yield('main')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('front/js/scripts.js') }}"></script>
        @stack('js')
    </body>
</html>