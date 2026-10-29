<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DigitalLife</title>
    <!-- Agregar los estilos CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Colores principales */
        :root {
            --main-green: #2E524D; /* Verde oscuro */
            --light-green: #A7C5B4; /* Verde más claro */
            --white: #ffffff;
            --dark-grey: #1a1a1a;
            --light-grey: #f5f5f5;
        }

        /* Estilos para navbar */
        .navbar {
            background-color: var(--dark-grey);
        }
        .navbar .navbar-brand {
            color: var(--main-green);
        }
        .navbar .nav-link {
            color: var(--white);
            padding: 0 15px;
        }
        .navbar .nav-link:hover {
            color: var(--light-green);
        }
        .navbar .btn {
            background-color: var(--main-green);
            color: var(--white);
            font-weight: bold;
        }
        .navbar-nav {
            margin-left: auto; /* Empuja las opciones hacia la derecha */
        }
        .hero {
            background-color: var(--main-green);
            color: var(--white);
            padding: 80px 0;
        }
        .hero h1 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
        }
        .features {
            padding: 60px 0;
            background-color: var(--light-grey);
        }
        .features h2 {
            color: var(--main-green);
        }
        .card {
            border: none;
            background-color: var(--white);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: var(--main-green);
        }
        .btn-custom {
            background-color: var(--main-green);
            color: var(--white);
            font-weight: bold;
        }
        footer {
            background-color: var(--dark-grey);
            color: var(--white);
        }

        /* Estilos para cuando el cursor pasa sobre el enlace de cerrar sesión */
        .nav-item .nav-link-logout:hover {
            color: var(--white) !important; /* Cambiar a blanco al pasar el cursor */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <!-- Logo DigitalLife a la izquierda -->
            <a class="navbar-brand fs-2" href="{{ url('/') }}" style="color: var(--main-green);">DigitalLife</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Estas opciones se moverán a la derecha, al lado de cerrar sesión -->
                    <li class="nav-item">
                        <a class="nav-link fs-4 active" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#">Sobre Nosotros</a>
                    </li>
                    <!-- Agregar Cerrar sesión en la parte superior derecha -->
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link fs-4 nav-link-logout" style="color: var(--main-green); font-weight: bold;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Bienvenido a DigitalLife</h1>
            <p class="fs-4">Soluciones de seguridad avanzada para tu hogar y negocio.</p>
            <a href="#" class="btn btn-custom btn-lg mt-4">Descubre más</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0">
                        <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Servicio 1">
                        <div class="card-body">
                            <h5 class="card-title">Sensor 1</h5>
                            <p class="card-text">Descripción </p>
                            <a href="#" class="btn btn-custom">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0">
                        <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Servicio 2">
                        <div class="card-body">
                            <h5 class="card-title">Sensor 2</h5>
                            <p class="card-text">Descripción </p>
                            <a href="#" class="btn btn-custom">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0">
                        <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Servicio 3">
                        <div class="card-body">
                            <h5 class="card-title">Sensor 3</h5>
                            <p class="card-text">Descripcion 3.</p>
                            <a href="#" class="btn btn-custom">Más info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy;  DigitalLife</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
