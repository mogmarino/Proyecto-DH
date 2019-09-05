@extends('layout')

@section('titulo')
  Categorias
@endsection

@section('main')
  <div class="jumbotron mt-3">
    <h3>Categorias</h3>

    <h6 class="d-inline mr-3">Listado de categorias</h6>
  </div>
  <ul>
    @foreach ($categorias as $categoria)
      <li>
        <a href="/categoria/{{$categoria->id}}">
          {{$categoria->nombre}}
        </a>
      </li>
    @endforeach
  </ul>
  {{$categorias->links()}}


@endsection
