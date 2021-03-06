<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Vem Com a Impacto</title>
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
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

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

    <div class="logo mr-auto d-lg-none">
        <a href="{{ route('home') }}"><img class="img-topo" src="{{ asset('img/logo-topo-preto.png') }}" ></a>
    </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ route('home') }}" class="menu-home">HOME</a></li>
                <li><a href="#planos">PLANOS</a></li>
                <li><a href="#team">MISS??O E VALORES</a></li>

{{--                <li class="drop-down"><a href="#planos">PLANOS</a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">ADOLESC??NCIA</a></li>--}}
{{--                        <li><a href="#">FASE ADULTA</a></li>--}}
{{--                        <li><a href="#">GESTANTE</a></li>--}}
{{--                        <li><a href="#">CLIMAT??RIO (MENOPAUSA)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="{{ route('galeria') }}">GALERIA DE FOTOS</a></li>--}}
                <li><a href="#galeria">AULAS</a></li>
                <li><a href="#contact">CONTATO</a></li>
                <li><a href="https://www.terminalsca.com/comaimpacto/" target="_blank">PAINEL DO ALUNO</a></li>

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
                        <h3>Academia Impacto Fitness</h3>
                        <p class="pb-3"><em>NOSSO OBJETIVO ?? O SEU RESULTADO.</em></p>
                        <p>
                            R. Avar?? - Jardim Angela<br>
                            Embu das Artes - SP, 06824-270<br><br>
                            <strong>Email:</strong> <a href="mailto:impacto.academiafitness@gmail.com" style="color: #6ca72c !important;">impacto.academiafitness@gmail.com</a><br>
                            <strong>Phone:</strong>  <a href="tel:5511941013323" style="color: #6ca72c !important;">(11) 9 4101-3323</a><br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://api.whatsapp.com/send?phone=5511941013323"  target="_blank"><i class="bx bxl-whatsapp"></i></a>
                            <a href="https://www.facebook.com/impact.acade" class="facebook"  target="_blank"><i class="bx bxl-facebook"></i></a>
{{--                            <a class="" href="https://www.google.com/maps/dir//ACADEMIA+IMPACTO+FITNESS/data=!4m8!4m7!1m0!1m5!1m1!1s0x94ce531831951c55:0x3b7403e06d37c44d!2m2!1d-46.803862699999996!2d-23.6741915"--}}
{{--                                target="_blank" data-tracking-element-type="6" jslog="56039; track:impression,click"><i class="bx bxl-facebook"></i></a>--}}
                            <a href="https://www.instagram.com/grupoimpactoacademia/?hl=pt-br" class="instagram"  target="_blank"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC8zcD8YKvumXv9A07p85RyA" class="instagram"  target="_blank"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
                    <h4>Links ??teis</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#team">Miss??o e Valores</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#planos">Planos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#galeria">Galeria</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contato</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.terminalsca.com/comaimpacto/" target="_blank">Painel do Aluno</a></li>
                    </ul>
                </div>

                <!-- End Footer -->

                </main>

                <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
            </div>

        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
                    <p class="text-center">Impacto {{ \Carbon\Carbon::now()->format('Y') }} | Todos os direitos reservados</p>
                    <p class="text-center">Desenvolvimento | <a href="mailto:maicon__costa@hotmail.com" >maicon__costa@hotmail.com</a></p>
                </div>
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
<!-- SweetAlert2 -->
<script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script>
@if(Route::getCurrentRoute()->getName() == 'home')
$('.menu-home').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
});
@endif
const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success ml-2',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
</script>
<script>
    @if ($errors->any())
    @php $erros = ''; @endphp
    @foreach ($errors->all() as $error)
        @php $erros .=' '.$error;
        @endphp
    @endforeach
    swalWithBootstrapButtons.fire(
        'Preencha os Campos',
        '{{ $erros }}',
        'warning'
    );
    @endif
</script>
@yield('js')
</body>

</html>
