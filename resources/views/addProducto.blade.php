@extends('layout')

@section('titulo')
  Agregar Producto
  <link rel="shortcut icon" href="/img/puppy_icon.ico"/>
@endsection

@section('main')
  <div class="row justify-content-center mt-3 mb-3">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Agregar Producto</div>

              <div class="card-body">
                  <form method="POST" action="/productos/add" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                          <div class="col-md-6">
                              <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                              @error('nombre')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>

                          <div class="col-md-6">
                              <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autocomplete="precio" autofocus>

                              @error('precio')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="stock" class="col-md-4 col-form-label text-md-right">Stock</label>

                          <div class="col-md-6">
                              <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>

                              @error('stock')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="ingreso" class="col-md-4 col-form-label text-md-right">Ingreso</label>

                          <div class="col-md-6">
                              <input id="ingreso" type="date" class="form-control @error('ingreso') is-invalid @enderror" name="ingreso" value="{{ old('ingreso') }}" required>

                              @error('ingreso')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="categoria" class="col-md-4 col-form-label text-md-right">Categoria</label>

                          <div class="col-md-6">
                              <select id="categoria"  class="form-control @error('categoria') is-invalid @enderror" name="categoria"  required>
                                @foreach ($categorias as $categoria)
                                  <option value="{{$categoria->id}}" {{$categoria->id == old("categoria") ? "selected" : ""}}>
                                    {{$categoria->nombre}}
                                  </option>
                                @endforeach
                              </select>

                              @error('categoria')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="marca" class="col-md-4 col-form-label text-md-right">Marca</label>

                          <div class="col-md-6">
                              <select id="marca"  class="form-control @error('marca') is-invalid @enderror" name="marca"  required>
                                @foreach ($marcas as $marca)
                                  <option value="{{$marca->id}}" {{$marca->id == old("marca")? "selected" : ""}}>
                                    {{$marca->nombre}}
                                  </option>
                                @endforeach
                              </select>

                              @error('marca')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>

                          <div class="col-md-6">
                              <input id="stock" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required >

                              @error('avatar')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Agregar
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>


@endsection
