@extends('layout.main_template')

@section('content')
<style>
  /* Personalización del color hueso */
  .card-welcome {
      background-color: #f5f5dc; /* Color hueso */
      border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .card-header-welcome {
      background-color: #d6cfc7; /* Hueso más oscuro */
      color: #3d3d3d;
      font-weight: bold;
      font-size: 1.25rem;
  }

  .card-body-welcome {
      color: #3d3d3d;
  }

  .card-footer-welcome {
      background-color: #d6cfc7;
      color: white;
      font-size: 0.9rem;
  }

  .btn-welcome {
      background-color: #d6cfc7; /* Hueso oscuro */
      color: white;
      border: none;
  }

  .btn-welcome:hover {
      background-color: #b7b19f; /* Hueso aún más oscuro */
  }

  .icon-welcome {
      font-size: 2rem;
      color: #8f8f7e;
  }
</style>

<!-- Contenedor principal con Bootstrap -->
<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="row w-100 justify-content-center">
      <div class="col-md-8">
          <!-- Tarjeta de bienvenida para el administrador -->
          <div class="card card-welcome">
              <div class="card-header card-header-welcome">
                  <i class="bi bi-person-circle icon-welcome"></i> ¡Bienvenido, GESTOR!
              </div>
              <div class="card-body card-body-welcome">
                  <h5 class="card-title">¡Gracias por gestionar la tienda!</h5>
                  <p class="card-text">
                     HOLA
                  </p>
              </div>
              <div class="card-footer card-footer-welcome text-center">
                  <a href="{{ route('products.index') }}" class="btn btn-welcome">Productos</a>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
