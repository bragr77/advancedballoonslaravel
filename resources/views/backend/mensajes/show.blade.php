@extends('backend.layouts.app2')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="m-0 font-weight-bold text-success">Enviado por:</h6>
                            <h6 class="mt-2 text-dark">{{ $mensaje->nombre }}</h6>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="m-0 font-weight-bold text-success">Teléfono:</h6>
                            <h6 class="mt-2 text-dark">{{ $mensaje->telefono }}</h6>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="m-0 font-weight-bold text-success">Email:</h6>
                            <h6 class="mt-2 text-dark">{{ $mensaje->email }}</h6>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <h6 class="m-0 font-weight-bold text-success">Asunto:</h6>
                    <p class="mt-2 text-dark">{{ $mensaje->asunto }}</p>

                    <h6 class="m-0 font-weight-bold text-success">Mensaje:</h6>
                    <p class="mt-2 text-dark">{{ $mensaje->mensaje }}</p>
                </div>
                <div class="card-footer text-center font-weight-bold text-dark">
                    Recibido el: {{$mensaje->created_at->format('d / m / Y') }}
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('mensajes.index') }}" class="btn btn-success btn-block">Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- .animated -->
@endsection
