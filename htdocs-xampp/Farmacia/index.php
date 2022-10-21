
<?php
    session_start();
   
    require 'database.php';
  
  
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Farmacias UCB</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- <?php 
        var_dump($_SESSION);
    ?> -->
    <div class="banner">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                <span><img src="img/Logo.png" height="100" alt="logo" /></span>
                <a href="" class="navbar-brand fw-bold">Farmacias UCB</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navtoggler">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <?php if (isset($_SESSION['USER'])): ?>
                    <div class="collapse navbar-collapse" id="navtoggler">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"> <a href="index.php" class="nav-link text-light fw-bold">Inicio</a></li>
                        <li class="nav-item"> <a href="products.php" class="nav-link text-light fw-bold">Productos</a></li>
                        <li class="nav-item"> <a href="/farmacia/controller_logout.php" class="nav-link text-light fw-bold">Cerrar Sesión</a></li>
                    
                    </ul>
                    </div>
                <?php else: ?>
                    <div class="collapse navbar-collapse" id="navtoggler">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"> <a href="index.php" class="nav-link text-light fw-bold">Inicio</a></li>
                        <li class="nav-item"> <a href="view_login.php" class="nav-link text-light fw-bold">Iniciar Sesión</a></li>
                        <li class="nav-item"> <a href="signup.php" class="nav-link text-light fw-bold">Registrarse</a></li>
                    </ul>
                    </div>
                <?php endif; ?>
                
            </div>
        </nav>
        <h1 class="fw-bold display-2 text-center text-light banner-heading">
            Donde comienza tu bienestar
        </h1>
        
        <div class="text-center">
            <button class="btn btn-warning text-light"><a href="#noticias" class="nav-link">Ver más</a></button>
        </div>
    </div>
    <div class="container mt-5" id="noticias">
        <h1 class="display-1">Noticias</h1>
    </div>
    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 blog-img">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="fw-bolder">Vacunacion Covid</h1>
                    <p class="fs-5 p-text">
                        El Ministerio de Salud y Deportes informó que hasta la fecha se aplicaron 14.916.675 dosis entre
                        la primera, segunda, tercera, unidosis y cuarta dosis a los diferentes grupos etarios de las
                        vacunas Sputnik V, AstraZeneca, Sinopharm, Pfizer y Janssen en todo el territorio
                        nacional.<br><br>

                        De las que 6.333.792 salubristas, maestros, personas de la tercera edad, niños, adolescentes,
                        mayores de 18 años y mujeres en gestación, recibieron la primera dosis de la vacuna contra la
                        COVID-19, así mismo, se aplicó 5.122.231 la segunda; 998.652 a dosis única, 2.064.249 terceras y
                        397.351 la cuarta dosis.<br><br>
                        Jornada de vacunación contra el Covid - 19 🧑‍⚕👩‍⚕<br><br>
                        😉 Si aún no te vacunaste puedes aproximarte al Atrio de la Universidad <br><br>
                        📆 Del 9 al 13 de mayo de 9:00 a 15:00 <br><br>
                        #YoElijoLaCato <br><br>
                    </p>
                    <button class="btn btn-warning">Ver más</button>
                </div>
            </div>
        </div>
    </section>
    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 blog-img2">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="fw bolder">La clínica odontológica de la universidad</h1>
                    <p class="fs-5 p-text">
                        En el acto participaron el Rector Nacional (P. José Fuentes Cano), el Rector de Sede Santa Cruz
                        (Mgr. Oscar Ortiz), la Dra Mónica Daza, Ing. Pablo Salguero (Coordinador Nacional de Educación
                        Virtual) Mgr. Julio Galarza (Coordinador Nacional de UTSI), Director Académico de Santa Cruz
                        (Dr. Henry Pinto), Director Académico y Financiero (Mgr. Alejandro Olivera), la Directora de la
                        carrera de Odontología (Dra. Roxana Sánchez), el Coordinador de UTSI Santa Cruz (Mgr. Jorge
                        Ordoñez) y el equipo a cargo del desarrollo comprendido por la Ing. Ana Claudia Arce como jefe
                        del proyecto y los desarrolladores (Mauricio Salazar y Jorge Quintanilla). <br> <br>

                        El Sistema de la Clínica Odontológica permite hacer un seguimiento clínico al paciente, desde la
                        admisión con el regitro de la ficha, hasta el regitro de los tratamientos formando la historia
                        clínica. De igual forma, permite hacer un seguimiento académico del docente al estudiante
                        evaluando y validando los pasos que realiza dentro de cada tratamiento.
                    </p>
                    <button class="btn btn-warning">Ver más</button>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <h1 class="display-1">Mas noticias sobre la universidad</h1>
    </div>
    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/noticia1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">La UCB participa de la XXVII Asamblea General de la FIUC.</h5>
                            <p class="card-text p-text">
                                El sábado 30 de julio, se dio inicio a la XXVII Asamblea General de la Federación
                                Internacional...
                            </p>
                            <a href="#" class="btn btn-warning">Seguir leyendo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/noticia2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">VISITA PROTOCOLAR DEL EMBAJADOR DE LA REPÚBLICA DE PANAMÁ AL RECTOR
                                NACIONAL</h5>
                            <p class="card-text">
                                El día 21 de julio en visita protocolar el Excelentísimo Embajador de la República de
                                Panamá...
                            </p>
                            <a href="#" class="btn btn-warning">Seguir leyendo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/noticia3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">La Universidad Internacional de Florida invita a la U.C.B. «San Pablo»</h5>
                            <p class="card-text">
                                El día 2 de agosto, Luis Guillermo Solís Rivera...
                            </p>
                            <a href="#" class="btn btn-warning">Seguir leyendo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1 class="text-warning fw-bold mt-3">
                        Farmacias UCB
                    </h1>
                    <p class="text-light p-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, dolor ipsum? Explicabo
                        labore et tenetur quae. Eaque debitis facere impedit vel? Hic ducimus quaerat exercitationem id
                        perferendis molestiae harum. Delectus?
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-light">
                    <h1 class="text-warning fw-bold mt-3">
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
                    <h1 class="text-warning fw-bold mt-3">
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
                    <h1 class="text-warning fw-bold mt-3">
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