<?php
session_start();

require 'database.php';


?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muebles UCB</title>
    <!-- CSS only -->
    <link href="https://bootswatch.com/5/litera/bootstrap.min.css" rel="stylesheet">
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
    <!-- App -->
    <script src="js/app.js"></script>
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
                Muebles UCB
            </a>
            <?php if (isset($_SESSION['USER'])) : ?>
                <div class="d-flex me-5 navContent">
                    <a class="nav-link me-5" aria-current="page"  href="index.php" >Home</a>
                    <a class="nav-link me-5" href="venta.php">Muebles a la venta</a>
                    <a class="nav-link me-5" href="pedidos.php">Pedidos</a>
                    <a class="nav-link me-5" href="contact.php">Contactanos</a>
                    <a class="nav-link me-5" href="controller_logout.php">Cerrar Sesión</a>
                </div>
            <?php else : ?>
                <div class="d-flex me-5 navContent">
                    <a class="nav-link me-5" aria-current="page"  href="index.php">Home</a>
                    <a class="nav-link me-5" href="venta.php">Muebles a la venta</a>
                    <a class="nav-link me-5" href="view_login.php">Iniciar Sesion</a>
                    <a class="nav-link me-5" href="signup.php">Registrarse</a>
                    <a class="nav-link me-5" href="contact.php">Contactanos</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
 


    <header>
        <section class="texts-header">
            <h1>Haz que tu hogar sea elegante</h1>
            <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-1.41,21.22 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path>
                </svg></div>
        </section>
    </header>
    <div class="container mt-5" id="">
        <h1 class="display-1 fw-bolder">Sobre Nosotros</h1>
    </div>
    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 blog-img">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="ps-5 fw-bolder">Qué hacemos?</h1>
                    <p class="ps-3 fs-5 p-text">
                        Hacemos todo aquello que necesitas como fabricante del sector del mueble para poder vender tus productos en el
                        canal e-commerce. Diseño y adaptación de productos, soluciones de embalaje, soluciones logísticas, desarrollo
                        de página web/tienda online, formación de personal, estrategias de marketing y mucho más.
                    </p>
                    <button class="btn btn-info ms-3">Ver más</button>
                </div>
            </div>
        </div>
    </section>

    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="ps-5 fw-bolder">Por qué confiar en nosotros?</h1>
                    <p class="ps-3 fs-5 p-text">
                        En Muebles UCB queremos ser para ti algo más que una agencia de muebles, pretendemos ser tú
                        socio que te ayude a lograr los objetivos de para el mejor diseño en tu casa. Nuestro
                        deseo es trabajar para ayudarte a hacer crecer tu negocio a través del posicionamiento de marca en la mente de
                        tu público objetivo, con acciones originales personalizadas para tu marca.

                        Queremos ser para tu empresa ese aliado que pueda responder a sus retos, inquietudes e incluso carencias, con
                        un plus de "expertise" e ingenio, acompañado en todo momento por planteamientos y propuestas eficientes además
                        de eficaces.
                    </p>
                    <button class="btn btn-info ms-3">Ver más</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 blog-img2">
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1 class="text-info fw-bold mt-3">
                        Muebles UCB
                    </h1>
                    <p class="text-light p-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, dolor ipsum? Explicabo
                        labore et tenetur quae. Eaque debitis facere impedit vel? Hic ducimus quaerat exercitationem id
                        perferendis molestiae harum. Delectus?
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-light">
                    <h1 class="text-info fw-bold mt-3">
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
                    <h1 class="text-info fw-bold mt-3">
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
                    <h1 class="text-info fw-bold mt-3">
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
</body>

</html>