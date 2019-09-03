@extends('layout')

@section('titulo')
  Home
@endsection
@section('css')
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('main')
  <div id="carouselExampleControls" class="carousel slide mt-3 mb-3" data-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active ">
      <img src="/img/productos.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <button class="btn btn-primary btn-lg">Productos</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/gato.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-secondary">

          <button class="btn btn-primary btn-lg">Categorias</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/marcas.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

          <button class="btn btn-primary btn-lg">Marcas</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/categorias.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

          <button class="btn btn-primary btn-lg ">Contacto</button>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row bg-primary text-white mt-3 mb-3">
  <h3 class="col-12 mt-3 mb-3">
    <i class="far fa-comment-dots ml-3"></i>
    <span class="ml-1">Preguntas Frecuentes FAQ</span>
  </h3>
  <div class="col-4 mt-3 mb-3">
    <h6 class="d-flex">
      <strong>
        ¿Por que mi pajaro se llama Claudio Paul?
      </strong>
    </h6>
    <p class="d-flex">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>

  </div>
  <div class="col-4 mt-3 mb-3">
    <h6 class="d-flex">
      <strong>
        ¿Por que mi gato Sessa es violento?
      </strong>
    </h6>
    <p class="d-flex">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>

  </div>
  <div class="col-4 mt-3 mb-3">
    <h6 class="d-flex">
      <strong>
        ¿Por que Higuita hace el alacran?
      </strong>
    </h6>
    <p class="d-flex">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>

</div>

<div class="row bg-primary">
  <div class="col-4 text-white mt-4">
    <h3>Nuestra misión</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
  <div class="col-4 text-white mt-4">
    <h3>Contacto</h3>
    <p>
      <i class="fas fa-home mr-3"></i>
      Mendoza, Argentina
    </p>
    <p>
      <i class="fas fa-envelope mr-3"></i>
      info@petshop.com
    </p>
    <p>
      <i class="fas fa-phone mr-3"></i>
      +54 9261 346-6706
    </p>
  </div>
  <div class="col-4 text-white mt-4">
    <h3 class="ml-4">Redes</h3>
    <ul>
      <li>
        <a href="https://www.facebook.com/digitalhouse.edu/">
          <i class="fab fa-facebook-f text-white"></i>
          <span class="text-white ml-2">Facebook</span>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/_digitalhouse?lang=es">
          <i class="fab fa-twitter text-white"></i>
          <span class="text-white ml-2">Twitter</span>
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCKkPOtW8gQPgIUaxF4Og7PA/videos">
          <i class="fab fa-youtube text-white"></i>
          <span class="text-white ml-2">YouTube</span>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/school/digital-house-argentina/">
          <i class="fab fa-linkedin-in text-white"></i>
          <span class="text-white ml-2">LinkedIn</span>
        </a>
      </li>
    </ul>

  </div>

</div>
<div class="row bg-primary justify-content-center text-white mt-3 mb-3">
  <h3 class="mt-3 mb-3">
    <i class="fas fa-map-marked-alt"></i>
    Ubicación
  </h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.2236972927058!2d-68.85965465970467!3d-32.89225336631603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09e08865d9f7%3A0x6a62c1f49ef33549!2sDigital%20House%20-%20Mendoza!5e0!3m2!1ses!2sar!4v1567465660633!5m2!1ses!2sar" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
@endsection
