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

                    <div class="col-md-8 wide-col-laptop">
                        <div class="title-block animate titulo-galeria mt-5" data-animate="fadeInUp">
                            <h3 class="d-none d-md-block">Babies</h3>
                            <h4 class="d-sm-block d-md-none pt-3" style="font-size: 1.5em;">Babies</h4>
                            <a href="javascript:history.back(-1);" class="btn btn-servicios7">Return</a>
                        </div>

                        <div class="services-list owl-carousel" id="servicescarrusel">

                            <div class="item">
                                <div class="service-box">
                                    <img class="img-galeria" src="frontend/images/servicios/bebes/babyshower.jpg" alt="Balloon arrangement for baby showers">
                                    <h3 class="h3-servicios7">Baby Shower</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios7 btn-block">I want it!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <img class="img-galeria" src="frontend/images/servicios/bebes/ninoonina.jpg" alt="Balloon arrangement for boy or girl">
                                    <h3 class="h3-servicios7">Boy/Girl</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios7 btn-block">I want it!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <img class="img-galeria" src="frontend/images/servicios/bebes/bienvenido.jpg" alt="Balloon arrangement for children's welcome">
                                    <h3 class="h3-servicios7">Welcome</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios7 btn-block">I want it!</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="service-box">
                                    <img class="img-galeria" src="frontend/images/servicios/bebes/primercumpleaño.jpg" alt="Balloon arrangement for your first birthday">
                                    <h3 class="h3-servicios7">First birthday</h3>
                                    <a href="https://api.whatsapp.com/send?phone=17542455353&text=Saludos.%20necesito%20informaci%C3%B3n" target="_blank" class="btn btn-servicios7 btn-block">I want it!</a>
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
                    </script> All rights reserved | This website was created by: <a href="https://ragrtics.com/" target="_blank" style="color: #000">Raúl González</a> & <a href="https://www.instagram.com/sharoarte/" target="_blank" style="color: #000">Sharo Art</a></p>
            </ul>
        </div>
    </div>

</div>
@endsection

