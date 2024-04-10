
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
        <link rel="icon" type="image/x-icon" href="{{ asset('front/img/wwic-icon.png') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @stack('css')
    </head>
    <body>
        @include('front.layout.navbar')
        <div class="bg">
            @yield('main')
        {{-- <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer> --}}

        <!-- Footer -->
        <footer class="bg-dark text-center text-lg-start bg-body-tertiary text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Temukan kami di jejaring media sosial lainnya</span>
            </div>
            <!-- Left -->
        
            <!-- Right -->
            <div>
                <a href="{{ $config['fb'] }}" class="me-4 text-reset" target="_blank">
                <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{ $config['wa'] }}" class="me-4 text-reset" target="_blank">
                <i class="fab fa-whatsapp"></i>
                </a>
                <a href="{{ $config['ig'] }}" class="me-4 text-reset" target="_blank">
                <i class="fab fa-instagram"></i>
                </a>
                <a href="{{ $config['dc'] }}" class="me-4 text-reset" target="_blank">
                <i class="fab fa-discord"></i>
                </a>
                <a href="{{ $config['msg'] }}" class="me-4 text-reset" target="_blank">
                <i class="fab fa-facebook-messenger"></i>
                </a>
                <a href="{{ $config['web'] }}" class="me-4 text-reset" target="_blank">
                <i class="fab fa-google"></i>
                </a>
            </div>
            <!-- Right -->
            </section>
            <!-- Section: Social media -->
        
            <!-- Section: Links  -->
            <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-1">{{ $config['footle1'] }}</h6>
                    <div class="col-md-4"><img src="{{ asset('front/img/wwic-icon.png') }}" width="150px"></div>
                    <div class="col-md-8">
                        <p style="text-align: justify">{!! $config['footdesc1'] !!}</p> 
                    </div>

                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">{{ $config['footle2'] }}</h6>
                    <div class="col-md-4 mt-5 mb-5 pb-3 pt-2"><img src="{{ asset('front/img/ww-icon.png') }}" width="150px"></div>
                    <div class="col-md-8">
                        <p style="text-align: justify">{!! $config['footdesc2'] !!}</p> 
                    </div>

                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">{{ $config['footle3'] }}</h6>
                    <div class="col-md-4 mt-1 mb-1"><img src="{{ asset('front/img/slavus-oc.png') }}" width="150px"></div>
                    <div class="col-md-8">
                        <p style="text-align: justify">{!! $config['footdesc3'] !!}</p> 
                    </div>

                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        {{ $config['footle4'] }}
                    </h6>
                    {!! $config['footdesc4'] !!}
                </div>
                <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
            </section>
            <!-- Section: Links  -->
        
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                {!! $config['license'] !!}
            <p>{{ date('Y') }} :</p>
            {!! $config['copyright'] !!}
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- AOS JS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- Core theme JS-->
        <script src="{{ asset('front/js/scripts.js') }}"></script>
        @stack('js')
    </body>
</html>