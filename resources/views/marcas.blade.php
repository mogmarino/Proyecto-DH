@extends('layout')

@section('titulo')
  Marcas
@endsection

@section('main')
  <div class="jumbotron mt-3">
    <h3>Marcas</h3>

    <h6 class="d-inline mr-3">Listado de marcas</h6>
  </div>
  <ul>
    @foreach ($marcas as $marca)
      <li>
        <a href="/marca/{{$marca->id}}">
          {{$marca->nombre}}
        </a>
      </li>
    @endforeach
  </ul>
  {{$marcas->links()}}


@endsection
