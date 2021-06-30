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

        <div class="section animated-row" data-section="gslide01">
            <div class="section-inner">
                <div class="row justify-content-center">

                    <div class="col-md-6 wide-col-laptop">
                        <div class="title-block animate titulo-galeria mt-5" data-animate="fadeInUp">
                            <h3 class="d-none d-md-block">Graduaciones</h3>
                            <h4 class="d-sm-block d-md-none pt-3" style="font-size: 1.5em;">Graduaciones</h4>
                            <a href="javascript:history.back(-1);" class="btn btn-servicios7">Regresar</a>
                        </div>

                        <div class="services-list owl-carousel" id="servicescarrusel">

                            <div class="item">
                                <div class="service-box">
                                    <img class="img-galeria" src="frontend/images/servicios/graduaciones/graduacionbuquet.jpg" alt="Buquet de globos para graduación">
                                    <h3 class="h3-servicios8">Buquets de Globos</h3>
                                    <!-- <p>Elaboración de arcos y gurinaldas de globos oarganica para interiores y exteriores.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios8 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <img class="img-galeria" src="frontend/images/servicios/graduaciones/graduacionpared.jpg" alt="Diseño orgáinco de globos para graduaciones">
                                    <h3 class="h3-servicios8">Diseño Orgánico</h3>
                                    <!-- <p>Elaboración de arcos y gurinaldas de globos oarganica para interiores y exteriores.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios8 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <img class="img-galeria" src="frontend/images/servicios/graduaciones/graduacionbuquet2.jpg" alt="Buquet de globos para graduación">
                                    <h3 class="h3-servicios8">Buquets de Globos</h3>
                                    <!-- <p>Elaboración de arcos y gurinaldas de globos oarganica para interiores y exteriores.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios8 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <img class="img-galeria" src="frontend/images/servicios/graduaciones/graduacionbuquet3.jpg" alt="Buquet de globos para graduación">
                                    <h3 class="h3-servicios8">Buquets de Globos</h3>
                                    <!-- <p>Elaboración de arcos y gurinaldas de globos oarganica para interiores y exteriores.</p> -->
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios8 btn-block">¡Lo quiero!</a>
                                </div>
                            </div>

                        </div>

                        <div class="mt-2">
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
