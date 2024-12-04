<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('index') }}">
            <i class="fa-brands fa-laravel"></i> Laravel App
        </a>

        <!-- Botón para dispositivos móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Opciones del menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('products.index') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('clients.index') }}">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('sales.index') }}">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('brands.index') }}">Marcas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('addresses.index') }}">Direcciones</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
