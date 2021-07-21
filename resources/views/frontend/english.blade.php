@extends('frontend.layouts.app')

@section('content')
<div id="video">
    <div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <header id="header">
        <div class="container-fluid">
            <div class="navbar">
                <div class="logo">
                    <img class="d-none d-md-block" src="frontend/images/logoAB.png" alt="">
                    <img class="d-sm-block d-md-none" src="frontend/images/logoAB2.png" alt="">
                </div>
                <div class="navigation-row">
                    <nav id="navigation">
                        <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                        <div class="nav-box navbar-collapse">
                            <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                                <li data-menuanchor="slide02"><a href="#slide02">For all occasions</a></li>
                                <li data-menuanchor="slide03"><a href="#slide03">Our jobs</a></li>
                                <li data-menuanchor="slide04"><a href="#slide04">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <a href="{{ route('español') }}" class="btn btn-servicios5">Español</a>
            </div>
        </div>
    </header>

    <div class="d-sm-block d-md-none">
        <video autoplay muted loop id="myVideo">
          <source src="frontend/images/videomobile.m4v" type="video/mp4">
        </video>
    </div>
    <div class="d-none d-md-block">
        <video autoplay muted loop id="myVideo">
          <source src="frontend/images/videohome.mp4" type="video/mp4">
        </video>
    </div>

    <div id="fullpage" class="fullpage-default">

        <div class="section animated-row" data-section="slide01">
            <div class="section-inner">
                <div class="welcome-box">
                    <!-- <h1 class="h1hero welcome-title animate" data-animate="fadeInUp">AdvancedBallons</h1> -->
                    <img src="frontend/images/logoGris.png" alt="">
                    <span class="welcome-first animate my-3 font-weight-bold" data-animate="fadeInUp">Welcome!</span>
                    <p class="animate" data-animate="fadeInUp">Artistic decoration with BALLOONS for all kinds of EVENTS. We offer Buquets, Arches and Garlands with organic balloons, custom arrangements and much more.</p>
                    <p class="animate" data-animate="fadeInUp">We also have Professional Photography service.</p>
                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide02">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <div class="title-block animate" data-animate="fadeInUp">
                            <!-- <span>Services</span> -->
                            <h2 class="mt-5">For all occasions</h2>
                        </div>

                        <div class="services-list owl-carousel" id="servicescarrusel">
                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('babies') }}" class="mb-2 a-servicios7">View gallery</a>
                                    <a href="{{ route('babies') }}">
                                        <img class="img-services1" src="frontend/images/servicios/bebes.png" alt="">
                                    </a>
                                    <h3 class="h3-servicios7">Babies</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios7 btn-block">I want it!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('birthday') }}" class="mb-2 a-servicios1">View gallery</a>
                                    <a href="{{ route('birthday') }}">
                                        <img class="img-services1" src="frontend/images/servicios/cumpleanos.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios1">Birthday</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios1 btn-block">I want it!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('events') }}" class="mb-2 a-servicios2">View gallery</a>
                                    <a href="{{ route('events') }}">
                                        <img class="img-services1" src="frontend/images/servicios/eventosespeciales.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios2">Special events</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios2 btn-block">I want it!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('anniversaries') }}" class="mb-2 a-servicios5">View gallery</a>
                                    <a href="{{ route('anniversaries') }}">
                                        <img class="img-services1" src="frontend/images/servicios/aniversarios.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios5">Anniversaries</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios5 btn-block">I want it!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('graduations') }}" class="mb-2 a-servicios8">View gallery</a>
                                    <a href="{{ route('graduations') }}">
                                        <img class="img-services1" src="frontend/images/servicios/graduaciones.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios8">Graduations</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios8 btn-block">I want it!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('photography') }}" class="mb-2 a-servicios2">View gallery</a>
                                    <a href="{{ route('photography') }}">
                                        <img class="img-services1" src="frontend/images/servicios/fotografia.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios2">Photography</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios2 btn-block">I want it!</a>
                                </div>
                            </div>

                        </div>

                        <div class="mt-4">
                            <div class="custom-nav1">
                                <a href="#" class="custom-prev2">
                                    <i class="fas fa-chevron-circle-left"></i>
                                </a>
                                <!-- <span class="mx-3">/</span> -->
                                <a href="#" class="custom-next2">
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide03">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <div class="title-block animate">
                            <h2>Our jobs</h2>
                        </div>

                        <div class="gallery-list owl-carousel" id="galerycarrusel">

                            @foreach ($portafolios as $portafolio)

                                @if ($portafolio->visible == "SI")
                                    <div class="item">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend/images/portafolio/'.$portafolio->imagen) }}" alt="{{ $portafolio->nombreingles }}">
                                            </div>
                                            <div class="thumb-inner">
                                                <h4>{{ $portafolio->nombreingles }}</h4>
                                                <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="mt-3 btn btn-servicios5 btn-block">I want it!</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @endforeach

                        </div>
                        <div class="mt-3">
                            <div class="custom-nav1">
                                <a href="#" class="custom-prev3">
                                    <i class="fas fa-chevron-circle-left"></i>
                                </a>
                                <a href="#" class="custom-next3">
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide04">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-7 wide-col-laptop">
                        <div class="title-block animate" data-animate="fadeInUp">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="contact-section">
                            <div class="row">
                                <div class="col-md-5 animate" data-animate="fadeInUp">
                                    <div class="contact-box">
                                        <div class="contact-row">
                                            <i class="fas fa-map-marked-alt"></i> 4141 NW 114 TH AVE APT #2 <br> CORAL SPRINGS FL 33065
                                        </div>
                                        <div class="contact-row">
                                            <i class="fas fa-headset"></i> Lisa Ramirez: &nbsp&nbsp&nbsp&nbsp&nbsp 754-2455353
                                            <br> Isbelia Carrillo: &nbsp&nbsp 786-3123059
                                            <br> Javier Ramirez: &nbsp&nbsp954-7295295
                                        </div>
                                        <div class="contact-row">
                                            <i class="fa fa-envelope"></i> advancedballoons@gmail.com
                                        </div>
                                    </div>
                                </div>
                                <div class="codigoqr col-md-2 animate mb-3" data-animate="fadeInUp">
                                    <div id="qrcode">
                                        <img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fragrtics.com%2F&s=6&e=q" alt="Generador de Códigos QR Codes" />
                                    </div>
                                </div>

                                <form class="col-md-5 formulario" action="{{ route('mensajes.store') }}" method="post">

                                    @csrf

                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text1" id="nombre">Name: &nbsp&nbsp&nbsp&nbsp</span>
                                        </div>
                                        <input type="text" class="form-control" aria-describedby="nombre" name="nombre" id="nombre" required>
                                    </div>

                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text1" id="email">Email: &nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                        </div>
                                        <input type="text" class="form-control" aria-describedby="email" name="email" id="email" required>
                                    </div>

                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text1" id="telefono">Phone: &nbsp&nbsp&nbsp</span>
                                        </div>
                                        <input type="text" class="form-control" aria-describedby="telefono" name="telefono" id="telefono" required>
                                    </div>

                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text1" id="mensaje">Message:</span>
                                        </div>
                                        <textarea class="form-control" aria-describedby="mensaje" name="mensaje" id="mensaje" required></textarea>
                                    </div>
                                    <button class="btn btn-servicios5 btn-block" type="submit">Send</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="social-icons">
        <div class="text-right">
            <ul class="social-icons">
                <li><a href="https://www.instagram.com/advancedballoons/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></i></a></li>
            </ul>
        </div>
    </div>

    <div id="creditos" class="d-none d-lg-block d-xl-block">
        <div class="text-right">
            <ul class="creditos">
                <p>Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This website was created by: <a href="https://ragrtics.com/" target="_blank" style="color: #000">Raúl González</a> & <a href="https://www.instagram.com/sharoarte/" target="_blank" style="color: #000">Sharo Art</a></p>
            </ul>
        </div>
    </div>

</div>
@endsection

