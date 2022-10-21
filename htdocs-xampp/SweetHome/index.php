<?php
session_start();

require 'conexion.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sweet home</title>
    <!-- CSS only -->
    <link href="https://bootswatch.com/5/sandstone/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- <?php
            var_dump($_SESSION);
            ?> -->
    <nav class="navbar bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-dark fs-3 banner-text " href="">
                <img src="img/2.png" alt="" width="50" height="50" class="d-inline-block align-text-top ms-5">
                sweet home
            </a>
            <?php if (isset($_SESSION['USER'])) : ?>
                <div class="d-flex me-5 navContent">
                    <a class="nav-link me-5" aria-current="page"  href="index.php">Inicio</a>
                    <a class="nav-link me-5" href="abm.php">Dispositivos</a>
                    <a class="nav-link me-5" href="controller_logout.php">Cerrar Sesión</a>
                </div>
            <?php else : ?>
                <div class="d-flex me-5 navContent">
                    <a class="nav-link me-5" aria-current="page"  href="index.php">Inicio</a>
                    <a class="nav-link me-5" href="departamentos.php">Departamentos</a>
                    <a class="nav-link me-5" href="">Casas</a>
                    <a class="nav-link me-5" href="">Contactos</a>
                    <a class="nav-link me-5" href="view_login.php">Iniciar Sesion</a>
                    <a class="nav-link me-5" href="signup.php">Registrarse</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
 


    <header>
        <section class="texts-header">
            <h1>Alquiler y venta de departamentos<br> y casas en Bolivia</h1>
        </section>
    </header>
    <div class="container mt-5" id="">
        <h1 class="display-1 fw-bolder">Acerca de nosotros</h1>
    </div>

    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 blog-img resizableImage">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="ps-5 fw-bolder">Te ayudamos a elegir un hogar en Bolivia</h1>
                    <p class="ps-3 fs-5 p-text">
                        Nosotros te ayudamos a eligir el mejor hogar, aquí en Bolivia te ayudamos tambien a que veas
                        todas las alternativas y mejores opciones, y asi junto a nuestros asesores eligas las mejores
                        opciones.
                    </p>
                    <button class="btn btn-danger ms-3" id="1_home">Ver más</button>
                </div>
            </div>
        </div>
    </section>

    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 blog-img2 resizableImage">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="ps-5 fw-bolder">El mejor lugar que puedas escoger </h1>
                    <p class="ps-3 fs-5 p-text">
                        Para que puedas elegir un lugar donde vivir te aconsejamos que vayas viendo las caracteristicas
                        más importantes para tu hogar perfecto, tambien puedes obetener mucha más nformación si le das
                        al boton de abajo.
                    </p>
                    <button class="btn btn-danger ms-3" id="2_home">Ver más</button>
                </div>

            </div>
        </div>
    </section>

    
    <footer class="bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1 class="text-danger fw-bold mt-3">
                        sweet home
                    </h1>
                    <p class="text-light p-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, dolor ipsum? Explicabo
                        labore et tenetur quae. Eaque debitis facere impedit vel? Hic ducimus quaerat exercitationem id
                        perferendis molestiae harum. Delectus?
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-light">
                    <h1 class="text-danger fw-bold mt-3">
                        Estamos en...
                    </h1>
                    <ul style="list-style-type: none">
                        <li>La Paz</li>
                        <li>Cochabamba</li>
                        <li>Santa Cruz</li>
                        <li>Tarija</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-light">
                    <h1 class="text-danger fw-bold mt-3">
                        Siguenos
                    </h1>
                    <ul style="list-style-type: none">
                        <li>Facebook</li>
                        <li>Youtube</li>
                        <li>Tik Tok</li>
                        <li>Instagram</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-light">
                    <h1 class="text-danger fw-bold mt-3">
                        Contactanos
                    </h1>
                    <ul style="list-style-type: none">
                        <li>2 2782222</li>
                        <li>Av. 14 de Septiembre Nº 4807 esquina, La Paz</li>
                        <li>Pagina Oficial</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- App -->
    <script src="js/app.js"></script>
</body>

</html>