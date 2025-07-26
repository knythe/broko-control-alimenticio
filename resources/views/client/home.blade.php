<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> Home | Broko </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="{{ asset('v2/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('v2/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('v2/css/responsive.css') }}" rel="stylesheet" />


</head>

<body>

    <div class="hero_area">
        <style>
            /* Imagen por defecto (escritorio) */
            .bg-box img {
                display: block;
            }

            /* Imagen alternativa oculta por defecto */
            .bg-box img.mobile {
                display: none;
            }

            /* En pantallas pequeñas, oculta la imagen grande y muestra la mobile */
            @media screen and (max-width: 768px) {
                .bg-box img.desktop {
                    display: none;
                }

                .bg-box img.mobile {
                    display: block;
                }
            }
        </style>

        <div class="bg-box">
            <img src="{{asset('v2/images/hero-bg.jpg')}}" alt="Imagen escritorio" class="desktop">
            <img src="{{asset('v2/images/bg-hero-movil.jpg')}}" alt="Imagen móvil" class="mobile">
        </div>


        <!-- header section strats -->
        <x-client.navigation-header />
        <!-- end header section -->


        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Bienestar Personalizado
                                        </h1>
                                        <p class="text-justify">
                                            Accede a un sistema diseñado especialmente para pacientes diabéticos, que adapta sus recomendaciones nutricionales según tus necesidades individuales. </p>
                                        @guest
                                        <div class="btn-box">
                                            <a href="/v2/register" class="btn1">
                                                Registrarse
                                            </a>
                                        </div>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Menús Diarios Inteligentes
                                        </h1>
                                        <p class="text-justify">
                                            Recibe sugerencias automáticas de desayuno, almuerzo y cena basadas en tus requerimientos calóricos, ayudándote a mantener una alimentación equilibrada. </p>
                                        @guest
                                        <div class="btn-box">
                                            <a href="/v2/register" class="btn1">
                                                Registrarse
                                            </a>
                                        </div>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Control y Seguimiento
                                        </h1>
                                        <p class="text-justify">
                                            Lleva un registro práctico de tu alimentación diaria para monitorear tu progreso, mejorar tu salud y mantener tus metas nutricionales bajo control. </p>
                                        @guest
                                        <div class="btn-box">
                                            <a href="/v2/register" class="btn1">
                                                Registrarse
                                            </a>
                                        </div>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ol class="carousel-indicators">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#customCarousel1" data-slide-to="1"></li>
                        <li data-target="#customCarousel1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>
    <!-- footer section -->
    <x-client.navigation-footer />
    <!-- footer section -->

    <!-- jQery -->
    <script src="{{ asset('v2/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{{ asset('v2/js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('v2/js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>