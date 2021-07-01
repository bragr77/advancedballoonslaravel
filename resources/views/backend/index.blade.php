@extends('backend.layouts.app2')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <a href="{{ route('mensajes.index') }}" class="col mr-2" style="text-decoration: none">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nuevos Mensajes:</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mcontador }}</div>
                        </a>
                        <div class="col-auto">
                            {{--  <i class="fas fa-calendar fa-2x text-gray-300"></i>  --}}
                            <i class="fas fa-inbox fa-3x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->

    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="">
        <div class="row">

        </div>
    </div>
</div>
<!-- .animated -->
@endsection
