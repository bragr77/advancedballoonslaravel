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
                        <div class="container  d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="card bg-light">
                                    <div class="card-header text-center">
                                        <img class="img-fluid" src="{{  asset('frontend/images/logoAB2.png') }}" alt="Logo">
                                    </div>
                                    <div class="card-body text-center">
                                    <h5 class="card-title" style="color:#000">Tu mensaje ha sido enviado.</h5>
                                    <p style="color:#4d4d4d">Hemos recibido tu solicitud. Serás contactado a la mayor brevedad posible.</p>
                                    <p style="color:#4d4d4d">¡Gracias por comunicarte con nosotros!</p>
                                    <hr>
                                    <h5 class="card-title" style="color:#000">Your message has been sent.</h5>
                                    <p style="color:#4d4d4d">We have received your request. You will be contacted as soon as possible.</p>
                                    <p style="color:#4d4d4d">Thank you for communicating with us!</p>
                                    <a class="btn btn-servicios7 btn-block" href="{{ route('index') }}">Regresar / Return</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
