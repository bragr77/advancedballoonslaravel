@extends('backend.layouts.app2')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <div class="row mt-5 d-flex justify-content-center">

            <div class="card" style="width: 20rem;">
                <img src=" {{  asset('frontend/images/portafolio/'.$portafolio->imagen) }}" alt="{{ $portafolio->nombre }}">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold">Nombre:</h5>
                    <h5 class="card-title">{{ $portafolio->nombre }}</h5>
                    <h5 class="card-title font-weight-bold">Nombre en Ingles:</h5>
                    <h5 class="card-title">{{ $portafolio->nombreingles }}</h5>
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
