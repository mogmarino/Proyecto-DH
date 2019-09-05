@extends('layout')

@section('titulo')
  Categoria {{$categoria->nombre}}
@endsection

@section('main')
  <div class="jumbotron mt-3">
    <h3>Categoria: {{$categoria->nombre}}</h3>

    <h6 class="d-inline mr-3">Listado de productos para la categoria {{$categoria->nombre}}</h6>
  </div>
  <ul>
    @foreach ($categoria->producto as $producto)
      <li>
        <a href="/producto/{{$producto->id}}">
          {{$producto->nombre}}
        </a>
      </li>
    @endforeach
  </ul>
  {{-- {{$categorias->links()}} --}}


@endsection
