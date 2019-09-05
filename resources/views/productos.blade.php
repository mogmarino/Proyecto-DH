@extends('layout')

@section('titulo')
  Productos
@endsection

@section('main')
  <div class="jumbotron mt-3">
    <h3>Productos</h3>

    <h6 class="d-inline mr-3">Listado de productos</h6>
  </div>
  <ul>
    @foreach ($productos as $producto)
      <li>
        <a href="/producto/{{$producto->id}}">
          {{$producto->nombre}}
        </a>
      </li>
    @endforeach
  </ul>
  {{$productos->links()}}


@endsection
