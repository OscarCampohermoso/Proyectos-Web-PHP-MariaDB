<?php
include("conexion.php");


$sql = "SELECT *  FROM celular_info";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Barrio Chino</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php
        // var_dump($row);
        // echo($row['precio']);
    ?>
    <nav class="navbar bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light fs-1 banner-text" href="index.php">
                <img src="img/logo2.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                Barrio Chino Shop
            </a>
            <button type="button" class="btn btn-warning d-flex flex-row-reverse me-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Insertar
            </button>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
                echo
                "<div class='col-lg-4 col-md-6 col-sm-12 mt-4 mt-sm-0'>
                    <div class='card  mt-3' style='width: 18rem;'>
                        <img class='ms-5 mt-3' src='data:image;base64,".base64_encode($row["imagen"])."' style='height:200px;width:200px;'>
                        <div class='card-body'>
                            <h5 class='card-title'>".$row["nombre"]."</h5>
                            <p class='card-text'><b>Marca: </b>".$row["marca"]."<br><b>Precio: </b>".$row["precio"]."</p>
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