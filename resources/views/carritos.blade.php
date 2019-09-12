@extends('layout')

@section('titulo')
  Productos
@endsection
@section('css')
  <link rel="stylesheet" href="/css/carritos.css">
@endsection

@section('main')
  <div class="jumbotron mt-3">
    <h3>Carrito</h3>

    <h6 class="d-inline mr-3">Listado de productos en el carrito</h6>
  </div>

    @foreach ($pedidos as $pedido)
        @foreach ($pedido->producto as $value)
          <div class="pedidos mt-3 mb-3 row justify-content-between">
          {{-- <h6 class="text-success">
            {{$value->id}}
          </h6> --}}
          <div class="col-5 mt-3 mb-2">
            <a href="/producto/{{$value->id}}">
              {{$pedido->pedido}}
            </a>
          </div>
          <div class="col-5 mt-3 mb-2">
            <button type="button" name="button" class="btn btn-outline-success">
              Comprar
            </button>
          </div>
        </div>
        @endforeach
        {{-- {{$pedido->producto}} --}}
    @endforeach
  {{$pedidos->links()}}


@endsection
