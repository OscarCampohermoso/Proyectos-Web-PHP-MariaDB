<?php
    require 'database.php';
    $query = "SELECT MAX(id_admin) FROM admin_user";
    $result = mysqli_query($connection, $query);
    $array = $result->fetch_array();
    //var_dump($array);
    $function = $array['MAX(id_admin)'] + 1;

    $message = '';
    $tipo = false;
    
    
    if (!empty($_POST['admin'])) {
        $admin = $_POST['admin'];
        $password = $_POST['password'];
        $query = "INSERT INTO admin_user (id_admin, usuario, contrasenia) VALUES ('$function', '$admin', '$password')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $message = 'Cuenta creada exitosamente';
            $tipo = true;
        } else {
            $message = 'Lo sentimos pero parece que la creacion de la cuenta no fue exitosa';
            $tipo = false;
        }
    }
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

    <form class="container mt-5 text-dark" action="signup.php" method="POST">
        <h1 class="display-3">Registrate</h1>
        
        <div class="mb-3 mt-3">
            <label for="" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="exampleInputUser1" name="admin" required>
    
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Confirma tu contraseña</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>

        <button type="submit" class="btn btn-warning text-light">Aceptar</button>
    </form>

    <?php if(!empty($message) && $tipo === true): ?>
            <script>swal("", '<?= $message?>', "success");</script>
    <?php elseif(!empty($message) && $tipo === false):?>
            <script>swal("", '<?= $message?>', "error");</script>
    <?php endif; ?>

    <script>
        var password = document.getElementById("password"), 
        confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Las contraseñas no son las mismas");
        } else {
            confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>