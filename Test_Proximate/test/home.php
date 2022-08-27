<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}

$nombre = $_SESSION['nombre'];


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home Proximate</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html"><img src="img/image001.png" alt=""></a>
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Salir</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Inicio
                        </a>


                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Aplicaciones
                        </a>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Libros
                        </a>


                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tutoriales
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Kotlin
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Bases de datos
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Información
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Politica de privacidad
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Proximate</h1>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">
                                    <h2>Clean Code</h2>
                                </div>
                                <center><img src="img/cleancode.jpeg" alt=""></center>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sunt quos ipsa quis ullam eveniet cum consectetur, aut dolore sint distinctio tempora. Quibusdam libero, blanditiis adipisci corporis, maiores et quam qui ad temporibus excepturi repellendus, culpa tenetur voluptate doloremque nisi eum ea eligendi pariatur sint dolor voluptas a mollitia at.</p>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Ver más...</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info text-white mb-4">
                                <div class="card-body">
                                    <h2>Kotlin</h2>
                                </div>
                                <center><img src="img/kotlin.png" alt=""></center>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad consequatur numquam explicabo dolor nemo incidunt recusandae similique enim quam debitis quasi cupiditate repellendus assumenda maiores, eveniet ea qui dolorem reprehenderit voluptatibus minima tenetur eaque delectus aut autem? Labore, totam sunt! Vero maxime qui adipisci impedit tempora totam nulla, quae aspernatur!</p>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Ver más...</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">
                                    <h2>Typescript</h2>
                                </div>
                                <center><img src="img/typescript.jpg" alt=""></center>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In sequi, odio harum architecto minima natus consectetur. Alias, eum ullam. Quisquam error, ut voluptate ipsa sequi saepe minus eos hic? Eius, aspernatur minima quia odio recusandae nostrum maiores suscipit autem impedit illo, deserunt et distinctio id incidunt accusamus expedita, aliquam est.</p>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Ver más...</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info text-white mb-4">
                                <div class="card-body">
                                    <h2>Swift</h2>
                                </div>
                                <center><img src="img/Swift.png" alt=""></center>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quibusdam sequi esse alias eveniet molestias obcaecati temporibus nulla rem, praesentium, aspernatur nam odit ducimus blanditiis atque eos officiis mollitia sed fuga! Ea deserunt qui incidunt sed tenetur temporibus ipsa velit blanditiis voluptatum, aperiam expedita hic beatae nisi laborum autem reiciendis.</p>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Ver más...</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Desarrollado por Carlos Santiago Gonzalez Cuellar
                            <strong>(PROXIMATE)</strong>
                        </div>
                        <div>
                            <a href="#">Politica de privacidad</a> &middot;
                            <a href="#">Terminos y condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>