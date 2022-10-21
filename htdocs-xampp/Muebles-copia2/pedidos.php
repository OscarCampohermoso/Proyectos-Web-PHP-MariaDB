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
    <script src="app.js"></script>
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
    <div class="container p-3">
        <div class="row">
            <div class="col-md-5">
                <div class="card mt-3">
                    <div class="card-body">
                        <form id="task-form" action="">
                            <div class="mb-3">
                                <input type="hidden" id="id_order">
                                <label for="" class="form-label">Numero de orden</label>
                                <input type="text" class="form-control" id="order_number">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Descripcion del mueble</label>
                                <textarea class="form-control" id="furniture_description" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Precio de envio</label>
                                <input type="text" class="form-control" id="shipping_price">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Costo de envio</label>
                                <input type="text" class="form-control" id="shipping_cost">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Codigo de usuario</label>
                                <input type="text" class="form-control" id="admin_id_admin">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary text-center">Guardar Tarea</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card my-4" id="task-result">
                    <div class="card-body">
                        <ul id="container">

                        </ul>
                    </div>
                </div>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody id="tasks">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>