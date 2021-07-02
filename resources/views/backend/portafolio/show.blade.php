@extends('backend.layouts.app2')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <div class="row mt-5 d-flex justify-content-center">

            <div class="card" style="width: 20rem;">
                <img src=" {{  asset('frontend/images/portafolio/'.$portafolio->imagen) }}" alt="{{ $portafolio->nombre }}">
                <div class="card-body text-center">
                    <p class="card-title font-weight-bold">Nombre: <span class="font-weight-normal">{{ $portafolio->nombre }}</span></p>
                    <p class="card-title font-weight-bold">Nombre en Ingles: <span class="font-weight-normal">{{ $portafolio->nombreingles }}</span></p>
                    <p class="card-title font-weight-bold">Visible: <span class="font-weight-normal">{{ $portafolio->visible }}</span></p>

                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('portafolio.edit', $portafolio) }}" class="btn btn-success">Editar</a>
                    <a href="{{ route('portafolio.index') }}" class="btn btn-primary">Regresar</a>
                </div>
            </div>

    </div>

</div>
<!-- .animated -->

@endsection
