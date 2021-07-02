@extends('backend.layouts.app2')

@section('content')

<!-- Animated -->
<div class="animated fadeIn">
    <h2 class="font-weight-bold text-center">Crear Artículo</h2>

    <div class="container card py-3">

        <form action="{{ route('portafolio.store') }}" method="POST"  enctype="multipart/form-data">

            @include('backend.portafolio._form')

            <div class="row d-flex justify-content-center">
                <button type="submit" class="btn btn-success mx-2">Crear</button>
                <a href="{{ route('panel') }}" class="btn btn-danger mx-2">Cancelar</a>
            </div>

        </form>

    </div>


</div>
<!-- .animated -->

@endsection
