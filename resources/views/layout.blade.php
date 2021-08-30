<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Academia Impacto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/Logoblack.png', env('SECURE_PATH',  null)) }}" rel="icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.css', env('SECURE_PATH',  null)) }}" rel="stylesheet"/>
    <link href="{{ asset('vendor/icofont/icofont.min.css', env('SECURE_PATH',  null)) }}" rel="stylesheet"/>

    <link href="{{ asset('vendor/boxicons/css/boxicons.css', env('SECURE_PATH',  null)) }}" rel="stylesheet"/>
    <link href="{{ asset('vendor/venobox/venobox.css', env('SECURE_PATH',  null)) }}" rel="stylesheet"/>
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.css', env('SECURE_PATH',  null)) }}" rel="stylesheet"/>
    <link href="{{ asset('vendor/aos/aos.css', env('SECURE_PATH',  null)) }}" rel="stylesheet"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css', env('SECURE_PATH',  null)) }}" rel="stylesheet"/>

    <!-- =======================================================
    * Template Name: Squadfree - v2.3.1
    * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

    <div class="logo mr-auto">
        <a href="{{ url('/index') }}">Impacto</a>
    </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ route('home') }}" class="menu-home">HOME</a></li>
                <li><a href="#planos">PLANOS</a></li>
                <li><a href="#team">SOBRE</a></li>

{{--                <li class="drop-down"><a href="#planos">PLANOS</a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">ADOLESCÊNCIA</a></li>--}}
{{--                        <li><a href="#">FASE ADULTA</a></li>--}}
{{--                        <li><a href="#">GESTANTE</a></li>--}}
{{--                        <li><a href="#">CLIMATÉRIO (MENOPAUSA)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="{{ route('galeria') }}">GALERIA DE FOTOS</a></li>--}}
                <li><a href="#galeria">GALERIA</a></li>
                <li><a href="#contact">CONTATO</a></li>

            </ul>
        </nav>
        <!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->

<!-- ======= content ======= -->
@yield('conteudo')
<!-- End content -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
                        <h3>Squadfree</h3>
                        <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi
                                quod.</em></p>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://api.whatsapp.com/send?phone=+5511943308575" class="twitter"><i class="bx bxl-whatsapp"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
                    <h4>Links úteis</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <!-- End Footer -->

                </main>

                <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- Vendor JS Files -->
<script src="{{ asset('vendor/jquery/jquery.min.js', env('SECURE_PATH',  null)) }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js', env('SECURE_PATH',  null)) }}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js', env('SECURE_PATH',  null)) }}"></script>
<script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js', env('SECURE_PATH',  null)) }}"></script>
<script src="{{ asset('vendor/counterup/counterup.min.js', env('SECURE_PATH',  null)) }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.js', env('SECURE_PATH',  null)) }}"></script>
<script src="{{ asset('vendor/venobox/venobox.js', env('SECURE_PATH',  null)) }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.js', env('SECURE_PATH',  null)) }}"></script>
<script src="{{ asset('vendor/aos/aos.js', env('SECURE_PATH',  null)) }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('js/main.js', env('SECURE_PATH',  null)) }}"></script>
<script>
@if(Route::getCurrentRoute()->getName() == 'home')
$('.menu-home').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
});
@endif
</script>
</body>

</html>
