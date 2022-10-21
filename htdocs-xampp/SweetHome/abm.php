<?php
session_start();
include("conexion.php");

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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
                    <a class="nav-link me-5" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link me-5" href="abm.php">Dispositivos</a>
                    <a class="nav-link me-5" href="controller_logout.php">Cerrar Sesión</a>
                    <button type="button" class="btn btn-info d-flex flex-row-reverse me-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Insertar
                    </button>
                    <!-- <a href="update.php" class="btn btn-info d-flex flex-row-reverse me-5 text-light">Modificar</a> -->
                </div>
            <?php else : ?>
                <div class="d-flex me-5 navContent">
                    <a class="nav-link me-5" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link me-5" href="view_login.php">Iniciar Sesion</a>
                    <a class="nav-link me-5" href="signup.php">Registrarse</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
                echo
                "<div class='col-lg-4 col-md-6 col-sm-12 mt-4 mt-sm-0'>
                        <div class='card  mt-3' style='width: 18rem;'>
                            <img class='ms-5 mt-3' src='data:image;base64," . base64_encode($row["image"]) . "' style='height:200px;width:200px;'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $row["nombre"] . "</h5>
                                <p class='card-text'><b>Marca: </b>" . $row["marca"] . "<br><b>Precio: </b>" . $row["precio"] . "</p>
                            " ?>
                <a href="actualizar.php?id=<?php echo $row["id_celular"] ?>" class="btn btn-info">Editar</a>
                <a href="delete.php?id=<?php echo $row["id_celular"] ?>" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
    </div>
<?php
            }
?>
</div>
</div>

</body>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="insertar.php" method="POST" enctype='multipart/form-data'>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insertar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type='file' class="form-control mb-3" name='file' required>
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required>
                    <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" required>
                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" value="Upload" class="btn btn-warning">Guardar Datos</button>
                </div>
            </form>
        </div>
    </div>
</div>



</html>