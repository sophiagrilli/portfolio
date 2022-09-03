<?php
    $pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body id="proyectos">
    <header>
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-sm-4 px-4 py-2">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
                        <h2>ABM CLIENTES</h2>
                        <p class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML,
                            CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>
                    <div class="row pt-4 pb-3">
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-4">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="ABM CLIENTES" class="img-fluid">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                        <p class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS,
                            PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row pt-4 pb-3">
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-4">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="ABM CLIENTES" class="img-fluid">
                        <h2>PROYECTO INTEGRADOR</h2>
                        <p class="py-2 px-3">AProyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery,
                            AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="row pt-4 pb-3">
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="links col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="links col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
                <a href="mailto:sophiagrilli@yahoo.com">sophiagrilli@yahoo.com</a>
            </div>
        </div>
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i
                    class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>

</html>