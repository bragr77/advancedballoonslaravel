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
                    <img class="d-none d-md-block" src="frontend/images/logoAB2.png" alt="">
                    <img class="d-sm-block d-md-none" src="frontend/images/logoAB2.png" alt="">
                </div>
                <div class="navigation-row">
                    <nav id="navigation">
                        <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                        <div class="nav-box navbar-collapse">
                            <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                <li data-menuanchor="slide01" class="active"><a href="#slide01">Inicio</a></li>
                                <li data-menuanchor="slide02"><a href="#slide02">Para toda Ocasión</a></li>
                                <li data-menuanchor="slide03"><a href="#slide03">Nuestros Trabajos</a></li>
                                <li data-menuanchor="slide04"><a href="#slide04">Contáctenos</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('index') }}" class="btn btn-servicios5">English</a>
                </div>
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
                    <span class="welcome-first animate my-3 font-weight-bold" data-animate="fadeInUp">¡Bienvenidos!</span>
                    <p class="animate" data-animate="fadeInUp">Decoración artística con GLOBOS para todo tipo de EVENTOS. Te ofrecemos Buquets, Arcos y Guirnaldas con globos orgánicos, arreglos personalizados y mucho más.</p>
                    <p class="animate" data-animate="fadeInUp">Ademas contamos con servicio de Fotografía Profesional.</p>
                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide02">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <div class="title-block animate" data-animate="fadeInUp">
                            <!-- <span>Services</span> -->
                            <h2 class="mt-5">Para toda Ocasión</h2>
                        </div>

                        <div class="services-list owl-carousel" id="servicescarrusel">
                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('bebes') }}" class="mb-2 a-servicios7">Ver Galeria</a>
                                    <a href="{{ route('bebes') }}">
                                        <img class="img-services1" src="frontend/images/servicios/bebes.png" alt="">
                                    </a>
                                    <h3 class="h3-servicios7">Bebes</h3>
                                    <!-- <p>Elaboración de arcos y gurinaldas de globos oarganica para interiores y exteriores.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios7 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('cumpleaños') }}" class="mb-2 a-servicios1">Ver Galeria</a>
                                    <a href="{{ route('cumpleaños') }}">
                                        <img class="img-services1" src="frontend/images/servicios/cumpleanos.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios1">Cumpleaños</h3>
                                    <!-- <p>Elaboración de buquets de globos para sorprender, en esas ocasiones especiales.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios1 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('eventos') }}" class="mb-2 a-servicios2">Ver Galeria</a>
                                    <a href="{{ route('eventos') }}">
                                        <img class="img-services1" src="frontend/images/servicios/eventosespeciales.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios2">Eventos Especiales</h3>
                                    <!-- <p>Decoración de globos para sus fiestas, Impresione a sus invitados con nuestras maravillosas decoraciones.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios2 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('aniversarios') }}" class="mb-2 a-servicios5">Ver Galeria</a>
                                    <a href="{{ route('aniversarios') }}">
                                        <img class="img-services1" src="frontend/images/servicios/aniversarios.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios5">Aniversarios</h3>
                                    <!-- <p>Pared de globos organica, Impresione a sus invitados con nuestras maravillosas decoraciones.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios5 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('graduaciones') }}" class="mb-2 a-servicios8">Ver Galeria</a>
                                    <a href="{{ route('graduaciones') }}">
                                        <img class="img-services1" src="frontend/images/servicios/graduaciones.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios8">Graduaciones</h3>
                                    <!-- <p>Entrega de globos con helio, para cumpleaños y cualquier tipo de evento.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios8 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <a href="{{ route('fotografia') }}" class="mb-2 a-servicios2">Ver Galeria</a>
                                    <a href="{{ route('fotografia') }}">
                                        <img class="img-services1" src="frontend/images/servicios/fotografia.png" alt="">
                                    </a>
                                    <!-- <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span> -->
                                    <h3 class="h3-servicios2">Fotografía</h3>
                                    <!-- <p>Entrega de globos con helio, para cumpleaños y cualquier tipo de evento.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios2 btn-block">¡Lo quiero!</a>
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
                            <h2>Nuestros Trabajos</h2>
                        </div>

                        <div class="gallery-list owl-carousel" id="galerycarrusel">

                            @foreach ($portafolios as $portafolio)

                                @if ($portafolio->visible == "SI")
                                    <div class="item">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend/images/portafolio/'.$portafolio->imagen) }}" alt="{{ $portafolio->nombre }}">
                                            </div>
                                            <div class="thumb-inner">
                                                <h4>{{ $portafolio->nombre }}</h4>
                                                <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="mt-3 btn btn-servicios5 btn-block">¡Lo quiero!</a>
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
                            <!--  <span>Contact</span> -->
                            <h2>Contáctenos</h2>
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
                                        <img src="frontend/images/qr.jpg" alt="Generador de Códigos QR Codes" />
                                    </div>
                                </div>

                                <form class="col-md-5 formulario" action="{{ route('mensajes.store') }}" method="post">

                                    @csrf

                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text1" id="nombre">Nombre:</span>
                                        </div>
                                        <input type="text" class="form-control" aria-describedby="nombre" name="nombre" id="nombre" required>
                                    </div>

                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text1" id="email">Email: &nbsp&nbsp&nbsp&nbsp</span>
                                        </div>
                                        <input type="text" class="form-control" aria-describedby="email" name="email" id="email" required>
                                    </div>

                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text1" id="telefono">Teléfono:</span>
                                        </div>
                                        <input type="text" class="form-control" aria-describedby="telefono" name="telefono" id="telefono" required>
                                    </div>

                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text1" id="mensaje">Mensaje:</span>
                                        </div>
                                        <textarea class="form-control" aria-describedby="mensaje" name="mensaje" id="mensaje" required></textarea>
                                    </div>
                                    <button class="btn btn-servicios5 btn-block" type="submit">Enviar</button>
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
                    </script> Todos los derechos reservados | Este sitio web fue creado Por: <a href="https://ragrtics.com/" target="_blank" style="color: #000">Raúl González</a> & <a href="https://www.instagram.com/sharoarte/" target="_blank" style="color: #000">Sharo Art</a></p>
            </ul>
        </div>
    </div>

</div>
@endsection

