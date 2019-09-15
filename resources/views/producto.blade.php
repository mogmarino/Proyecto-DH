@extends('layout')

@section('titulo')
  Producto {{$producto->nombre}}
@endsection
@section('css')
  <link rel="stylesheet" href="/css/producto.css">
  <link rel="shortcut icon" href="/img/puppy_icon.ico"/>
@endsection

@section('main')
  <div class="jumbotron mt-3">
    <h3>Producto</h3>
    <h6>{{$producto->nombre}}</h6>
    @if (Auth::check())
      <div class="row">
        <div class="mt-4 col-5">
          <a href="/productos/{{$producto->id}}/edit">
            <button type="submit" name="button" class="btn btn-lg btn-outline-primary">
              Editar
            </button>
          </a>

          <form class="mt-2 mb-2" action="/deleteProducto" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}

            <input type="hidden" name="id" value="{{$producto->id}}">
            <button type="submit" name="button" class="btn btn-lg btn-outline-danger">
              Eliminar
            </button>
          </form>
        </div>
        <div class="col-5 mt-4">
          <form class="" action="/carritos/add" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$producto->id}}">
            <button type="submit" name="button" class="btn btn-lg btn-outline-success">
              Agregar
              <i class="fas fa-cart-plus"></i>
            </button>
          </form>
        </div>
      </div>

    @endif

    {{-- <h6 class="d-inline mr-3">Listado de productos para la categoria {{$categoria->nombre}}</h6> --}}
  </div>
  <ul>

      <li class="img">
        <div class="img-prod">
          @if ($ext === "")
            <img  src="/img/producto.png" alt="imagen">
          @else
            <img  src="/storage/{{$producto->avatar}}" alt="">
          @endif
        </div>

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
