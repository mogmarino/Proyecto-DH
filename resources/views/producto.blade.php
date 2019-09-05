@extends('layout')

@section('titulo')
  Producto {{$producto->nombre}}
@endsection
@section('css')
  <link rel="stylesheet" href="/css/producto.css">
@endsection

@section('main')
  <div class="jumbotron mt-3">
    <h3>Producto</h3>
    <h6>{{$producto->nombre}}</h6>

    {{-- <h6 class="d-inline mr-3">Listado de productos para la categoria {{$categoria->nombre}}</h6> --}}
  </div>
  <ul>

      <li>
        <a href="{{$producto->avatar}}">Avatar</a>

      </li>
      <li>
        Precio: ${{$producto->precio}}
      </li>
      <li>
        Stock: {{$producto->stock}}
      </li>
      <li>
        Ingreso: {{$producto->ingreso}}
      </li>
      <li>
        Categoria:
        <a href="/categoria/{{$producto->categoria->id}}">
          {{$producto->categoria->nombre}}
        </a>
      </li>
      <li>
        Marcas:
        @foreach ($producto->marca as $marca)
          <li class="marcas">
            <a href="/marca/{{$marca->id}}">{{$marca->nombre}}</a>
          </li>
        @endforeach
          {{-- {{$producto->marca}} --}}

      </li>

  </ul>
  {{-- {{$categorias->links()}} --}}


@endsection
