<?php

include("conexion.php");
$id = $_GET['id'];

$sql = "SELECT * FROM celular WHERE id_celular='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

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
        </div>
    </nav>
    <div class="container card mt-5 p-5" style="width: 50rem;">
        <form action="update.php" method="POST" enctype='multipart/form-data'>

            <input type="hidden" name="id_celular" value="<?php echo $row['id_celular'] ?>">
                
            
            <?php echo "<img class='ms-5 m-3' src='data:image;base64,".base64_encode($row["image"])."' style='height:200px;width:200px;'>";?>
            <input type="file" class="form-control mb-3" name="file">
          
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>" required>
            <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" value="<?php echo $row['marca']  ?>" required>
            <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>" required>
            <a href="abm.php" class="btn btn-secondary">cancelar</a>
            <input type="submit" class="btn btn-warning btn-block" value="Actualizar">
        </form>
    </div>

</body>





</html>
