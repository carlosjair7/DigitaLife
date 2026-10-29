<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DigitalLife</title>

    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vite Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

        <!-- Navbar con fondo negro -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
            <div class="container">
                <!-- Logo DigitalLife a la izquierda -->
                <a class="navbar-brand fs-2" href="{{ url('/') }}">DigitalLife</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#about">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#services">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#contact">Contacto</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link fs-4" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-4" href="{{ route('register') }}">Register</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section con el color solicitado -->
        <section id="hero" class="text-white text-center py-5" style="background-color: #2e524d;">
            <div class="container">
                <h1 class="display-4 fw-bold">Bienvenido a DigitalLife</h1>
                <p class="fs-4">"Piensa diferente, Vive digital"</p>
                <a href="#services" class="btn btn-light btn-lg mt-4">Conoce nuestros servicios</a>
            </div>
        </section>

        <!-- Información sobre la empresa -->
        <section id="about" class="my-5">
            <div class="container text-center">
                <h2 class="mb-4">Sobre DigitalLife</h2>
                <p class="lead">
                    En DigitalLife, nos especializamos en ofrecer soluciones avanzadas de seguridad, centradas en sistemas de alarmas con sensores de movimiento. Nuestra misión es proteger lo que más importa con tecnología de última generación, garantizando la seguridad de hogares y negocios. Confía en nosotros para mantener tu entorno seguro y protegido las 24 horas del día, los 7 días de la semana.
                </p>
            </div>
        </section>

        <!-- Servicios Section -->
        <section id="services" class="py-5">
            <div class="container text-center">
                <h2 class="mb-4">Nuestros Servicios</h2>
                <div class="row">
                    <!-- Servicio 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-0">
                            <img src="{{ asset('images/servicio1.png') }}" class="card-img-top" alt="Servicio 1">
                            <div class="card-body">
                                <h5 class="card-title">Sensores de Movimiento</h5>
                                <p class="card-text">Instalamos sensores de movimiento avanzados para monitorear tu hogar o negocio 24/7.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-0">
                            <img src="{{ asset('images/servicio2.png') }}" class="card-img-top" alt="Servicio 2">
                            <div class="card-body">
                                <h5 class="card-title">Monitoreo Remoto</h5>
                                <p class="card-text">Accede desde cualquier lugar a través de nuestra app.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-0">
                            <img src="{{ asset('images/servicio3.png') }}" class="card-img-top" alt="Servicio 3">
                            <div class="card-body">
                                <h5 class="card-title">Alarmas y Alertas</h5>
                                <p class="card-text">Recibe alertas inmediatas en tu teléfono cuando se detecte movimiento sospechoso.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonios Section -->
        <section id="testimonials" class="py-5" style="background-color: #2e524d;">
            <div class="container text-center">
                <h2 class="mb-4 text-white">Testimonios</h2>
                <div class="row">
                    <div class="col-md-6">
                        <blockquote class="blockquote">
                            <p class="text-white">"DigitalLife nos ha dado la tranquilidad que necesitábamos. El sistema de sensores es rápido y confiable."</p>
                            <footer class="blockquote-footer text-white">Uziel Herrera, Cliente</footer>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <blockquote class="blockquote">
                            <p class="text-white">"El monitoreo remoto es muy conveniente, ¡ahora puedo vigilar mi negocio desde cualquier lugar!"</p>
                            <footer class="blockquote-footer text-white">Victor Gaona, Cliente</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white py-4">
            <div class="container text-center">
                <p>@DigitalLife  "Contactanos a @yayooo.10, @dapper_mxm"</p>
            </div>
        </footer>

    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
