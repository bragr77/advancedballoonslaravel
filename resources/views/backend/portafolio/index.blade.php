@extends('backend.layouts.app2')

@section('content')

<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Artículos del Blog</h2>

    <table id="portafolios" class="table table-hover">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Nombre en Ingles</th>
                <th>Visible</th>
                <th>Guardado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portafolios as $portafolio)

            <tr>
                <th>{{ $contp++ }}</th>
                <td>{{$portafolio->nombre }}</td>
                <td>{{$portafolio->nombreingles }}</td>
                <td>{{$portafolio->visible }}</td>
                <td>{{$portafolio->created_at->diffForHumans() }}</td>
                <td>
                    <div class="row">
                        <a href="{{ route('portafolio.show', $portafolio) }}" class="mr-1 btn btn-success btn-sm">Ver</a>
                        <form action="{{ route('portafolio.destroy', $portafolio) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-1 btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>
<!-- .animated -->

@endsection
