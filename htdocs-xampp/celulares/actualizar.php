<?php

include("conexion.php");
$con = conectar();
$id = $_GET['id'];

$sql = "SELECT * FROM celular_info WHERE id_celular='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

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
        </div>
    </nav>
    <div class="container card mt-5 p-5" style="width: 50rem;">
        <form action="update.php" method="POST" enctype='multipart/form-data'>

            <input type="hidden" name="id_celular" value="<?php echo $row['id_celular'] ?>">
                
            
            <?php echo "<img class='ms-5 m-3' src='data:image;base64,".base64_encode($row["imagen"])."' style='height:200px;width:200px;'>";?>
            <input type="file" class="form-control mb-3" name="file">
          
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>" required>
            <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" value="<?php echo $row['marca']  ?>" required>
            <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>" required>
            <a href="index.php" class="btn btn-secondary">cancelar</a>
            <input type="submit" class="btn btn-warning btn-block" value="Actualizar">
        </form>
    </div>

</body>





</html>
