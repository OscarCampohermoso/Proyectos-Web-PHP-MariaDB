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
                    <a class="nav-link me-5" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link me-5" href="venta.php">Muebles a la venta</a>
                    <a class="nav-link me-5" href="pedidos.php">Pedidos</a>
                    <a class="nav-link me-5" href="contact.php">Contactanos</a>
                    <a class="nav-link me-5" href="controller_logout.php">Cerrar Sesión</a>
                </div>
            <?php else : ?>
                <div class="d-flex me-5 navContent">
                    <a class="nav-link me-5" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link me-5" href="venta.php">Muebles a la venta</a>
                    <a class="nav-link me-5" href="view_login.php">Iniciar Sesion</a>
                    <a class="nav-link me-5" href="signup.php">Registrarse</a>
                    <a class="nav-link me-5" href="contact.php">Contactanos</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>



    <section>
        <div class="container card mt-5 p-5" style="width: 100rem;">
            <h1 class="display-4 fw-bold">Formulario de contacto</h1>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Estado</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Deacuerdo con los terminos y condiciones
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="button">Submit form</button>
                </div>
            </form>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="display-4 fw-bold">Nos encontramos en...</h1>
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="display-4 fw-bold">Redes Sociales...</h1>
                <div class="container card mt-5 p-5">
                    <a class="fa-brands fa-facebook"></a>
                    <a class="fa-brands fa-youtube"></a>
                    <a class="fa-brands fa-instagram"></a>
                    <a class="fa-brands fa-tiktok"></a>
                </div>
            </div>
        </div>
    </div>
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