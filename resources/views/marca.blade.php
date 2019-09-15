@extends('layout')

@section('titulo')
  Categoria {{$marca->nombre}}
  <link rel="shortcut icon" href="/img/puppy_icon.ico"/>
@endsection

@section('main')
  <div class="jumbotron mt-3">
    <h3>Marca: {{$marca->nombre}}</h3>

    <h6 class="d-inline mr-3">Listado de productos para la marca {{$marca->nombre}}</h6>
  </div>
  <ul>
    @foreach ($marca->producto as $producto)
      <li>
        <a href="/producto/{{$producto->id}}">
          {{$producto->nombre}}
        </a>
      </li>
    @endforeach
  </ul>
  {{-- {{$categorias->links()}} --}}


@endsection
