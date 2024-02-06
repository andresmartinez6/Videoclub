<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="../imgs/palomitas.jpg" type="image/x-icon">
    <title>Inicio</title>
</head>

<body>

<header>
    <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../imgs/palomitas.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="../imgs/palomitas.jpg" alt=""></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Series</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Plataformas
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Acceder</a></li>
                                    <li><a class="dropdown-item" href="#">Series</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-success" type="submit">Aceptar</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <section>
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Introduce tu usuario" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Introduce tu contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            </form>
    </section>
    
    <section>
        <!-- Sección de últimos lanzamientos -->
        <h2>Últimos Lanzamientos</h2>
        <!-- Agrega aquí el código para mostrar los últimos lanzamientos -->
    </section>
    
    <section>
        <!-- Sección de comentarios -->
        <h2>Últimos Comentarios</h2>
        <!-- Agrega aquí el código para mostrar el carrousel de comentarios -->
    </section>
    
        <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
            <span>Siguenos en nuestras redes sociales:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>

                <a  data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="#"
                role="button" href="#" class="me-4 text-reset">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>

                <a  data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #55acee;"
                href="#"
                role="button" href="#" class="me-4 text-reset">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>

                <a data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #dd4b39;"
                href="#"
                role="button" href="#" class="me-4 text-reset">
                    <i class="fa fa-google" aria-hidden="true"></i>
                </a>

                <a data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #ac2bac;"
                href="#"
                role="button" href="#" class="me-4 text-reset">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>

                <a data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="#"
                role="button" href="#" class="me-4 text-reset">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>

                <a data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #333333;"
                href="#"
                role="button" href="#" class="me-4 text-reset">
                    <i class="fa fa-github" aria-hidden="true"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4 text-center">
                    <i class="fas fa-gem me-3"></i>EAG
                </h6>
                <p class="text-center">
                EAG VideoClub es el sitio perfecto para los fanáticos del cine. 
                Desde clásicos, estrenos, series y hasta algunas reliquias en VHS.  
                Es el lugar ideal para los cinéfilos de corazón. ¡No te lo pierdas!
                </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 text-center">
                    Servicios
                </h6>

                    <p class="text-center">
                        <a href="#" class="text-reset text-decoration-none">Últimos lanzamientos</a>
                    </p>

                    <p class="text-center">
                        <a href="#" class="text-reset text-decoration-none">Películas</a>
                    </p>

                    <p class="text-center">
                        <a href="#" class="text-reset text-decoration-none">Series</a>
                    </p>

                    <p class="text-center">
                        <a href="#" class="text-reset text-decoration-none">Plataformas</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 text-center">
                    Atención al cliente
                </h6>
                <p class="text-center">
                    <a href="#" class="text-reset text-decoration-none">Politica de privacidad</a>
                </p>
                <p class="text-center">
                    <a href="#" class="text-reset text-decoration-none">Politica de Cookies</a>
                </p>
                <p class="text-center">
                    <a href="#" class="text-reset text-decoration-none">Aviso Legal</a>
                </p>
                <p class="text-center">
                    <a href="#" class="text-reset text-decoration-none">Terminos y condiciones</a>
                </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 text-center">Contacto</h6>
                <p class="text-center"><i class="fas fa-home me-3"></i> Avda. Doctor Olóriz, 6. Granada, 18012.</p>
                <p class="text-center">
                    <i class="fas fa-envelope me-3 text-center"></i>
                    info@videoclubeag.com
                </p>
                <p class="text-center"><i class="fas fa-phone me-3"></i> +34 958 27 80 60.</p>
                <p class="text-center"><i class="fas fa-print me-3"></i> +34 613 23 33 33</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); text-center">
            © 2021 Copyright
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <?php
    // require_once 'controlador_videoclub.php';
    // require_once 'vista_videoclub.php';

    // $controlador = new controlador_videoclub();
    // $vista = new vista_videoclub();

    // Lógica para manejar las peticiones del usuario y llamar a los métodos correspondientes del controlador

    // Ejemplo de uso:
    // $controlador->insertarCliente($datos);
    // $controlador->buscarClientes($filtros);
    // 
    ?>

</body>

</html>