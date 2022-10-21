<?php
session_start();

require 'conexion.php';
$sql = "SELECT *  FROM celular";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muebles UCB</title>
    <!-- CSS only -->
    <link href="https://bootswatch.com/5/simplex/bootstrap.min.css" rel="stylesheet">
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
                HipoTecno
            </a>
            <?php if (isset($_SESSION['USER'])) : ?>
                <div class="d-flex me-5 navContent">
                    <a class="nav-link me-5" aria-current="page"  href="index.php" >Home</a>
                    <a class="nav-link me-5" href="abm.php">Dispositivos</a>
                    <a class="nav-link me-5" href="controller_logout.php">Cerrar Sesión</a>
                </div>
            <?php else : ?>
                <div class="d-flex me-5 navContent">
                    <a class="nav-link me-5" aria-current="page"  href="index.php">Home</a>
                    <a class="nav-link me-5" href="view_login.php">Iniciar Sesion</a>
                    <a class="nav-link me-5" href="signup.php">Registrarse</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
 


    <header>
        <section class="texts-header">
            <h1>Los mejores disositivos aqui en HIPOTECNO</h1>
            <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-1.41,21.22 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path>
                </svg></div>
        </section>
    </header>
    <div class="container mt-5" id="">
        <h1 class="display-1 fw-bolder">Cotiza tus items</h1>
    </div>
    <form action="cotizar.php" class="ms-5" method="$_POST">
    <div class="container mt-5">
        <div class="row">
            <?php
            var_dump($_POST);
            while ($row = mysqli_fetch_assoc($query)) {
                echo
                "<div class='col-lg-4 col-md-6 col-sm-12 mt-4 mt-sm-0'>
                        <div class='card  mt-3' style='width: 18rem;'>
                            <img class='ms-5 mt-3' src='data:image;base64," . base64_encode($row["image"]) . "' style='height:200px;width:200px;'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $row["nombre"] . "</h5>
                                <p class='card-text'><b>Marca: </b>" . $row["marca"] . "<br><b>Precio: </b>" . $row["precio"] . "</p>
                            " ?>
                <input type="text" name="coti" id=$row["id_celular"]>
        </div>
    </div>
    </div>
<?php
            }
?>
</div>
</div>
            <button type="submit" class="btn btn-warning">Cotizar</button>
    </form>
    
    <footer class="bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1 class="text-info fw-bold mt-3">
                        HipoTecno
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