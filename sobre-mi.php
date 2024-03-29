<?php
    $pg = "sobre-mi";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body id="sobre-mi">
    <header>
        <?php include_once "menu.php"; ?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row">
                <div class="col-12 col-sm-5 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolor ipsam vero
                        aperiam ex
                        dolorem quam be</p>
                    <a href="contacto.html" class="btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-12 col-sm-3 mt-4 offset-sm-2">
                    <img src="images/foto-perfil.jpeg" alt="sophia grilli" title="Sophia Grilli"
                        class="img-fluid foto-perfil">
                </div>
            </div>
        </section>
        <section id="stack-tecnologico">
            <div class="container pb-4">
                <div class="row">
                    <div class="col-12 py-1">
                        <h2 class="my-sm-5">
                            Stack tecnológico
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>Javascript</h3>
                            <img src="images/javascript.jpeg" alt="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>PHP</h3>
                            <img src="images/php.jpeg" alt="php">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>HTML5</h3>
                            <img src="images/html5.png" alt="html5">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>React.js</h3>
                            <img src="images/react.png" alt="React">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>jQuery</h3>
                            <img src="images/jque.jpeg" alt="jQuery">
                        </div>
                    </div>

                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>Bootstrap</h3>
                            <img src="images/boot.png" alt="Bootstrap">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>Laravel</h3>
                            <img src="images/laravel.png" alt="Laravel">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>MySQL</h3>
                            <img src="images/mysql.png" alt="MySQL">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>CSS</h3>
                            <img src="images/css.png" alt="CSS">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>Git</h3>
                            <img src="images/git.png" alt="Git">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>Apache</h3>
                            <img src="images/apache.svg.png" alt="Apache">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="tecno mb-4 pt-5">
                            <h3>Mercadopago</h3>
                            <img src="images/ml.jpeg" alt="Mercadopago">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i> Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/unilever.png" alt="unilever" class="img-fluid baw">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Analista de Supply Chain</h3>
                        <h4>UNILEVER</h4>
                        <h5>Sept 2015 – junio 2018</h5>
                        <p>Gestión y control de sistema de ventas de productos promocionales, actualización de informes,
                            control de stocks, verificación de datos, manejo de SAP y Excel, gestión y análisis de
                            reclamos emitidos tanto por clientes internos como externos, manejo de facturas, emisión de
                            notas de crédito y débito, trato con clientes. Altas de códigos en sistema, seguimiento de
                            stocks, análisis para mejoras de procesos.
                        </p>
                    </div>
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/rci.webp" alt="rci" class="img-fluid baw">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Analista de Planning</h3>
                        <h4>RCI LATINOAMERICA S.A.</h4>
                        <h5>Feb 2014 – Mar 2015</h5>
                        <p>Análisis y seguimiento de las diferentes variables para la detección de riesgos y
                            oportunidades, confección del staff semanal del call center, análisis de mercado, reportes,
                            seguimiento de los principales indicadores de gestión y calidad, entre otras.
                        </p>
                    </div>
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/edificio.png" alt="edificio" class="img-fluid baw">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Puesto</h3>
                        <h4>Empresa</h4>
                        <h5>Duración</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi quibusdam assumenda fuga
                            velit temporibus voluptatum veritatis doloribus sed libero repellat. Nihil, quia! Excepturi
                            facilis magnam facere accusantium officiis temporibus quas?Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Nostrum quasi reiciendis libero, rem voluptatibus dolores
                            magni ab debitis ut, ad in, veritatis quas rerum tempore laudantium modi inventore ducimus.
                            <Eveniet class="lorem"></Eveniet>
                        </p>
                    </div>
                </div>
            </div>
            <section id="formacion">
                <div class="container">
                    <div class="row">
                        <div class="col-12 pt-5 pb-4">
                            <h2>
                                <i class="fa-solid fa-graduation-cap"></i> Formación académica
                            </h2>
                        </div>
                    </div>
                    <div class="row shadow">
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-2 d-none d-sm-block py-3 my-auto">
                                    <img src="images/udelar.jpeg" alt="udelar" class="img-fluid baw">
                                </div>
                                <div class="col-sm-10 p-3">
                                    <h3>Licenciatura en Relaciones Internacionales</h3>
                                    <h4>Universidad de la República - Uruguay</h4>
                                    <h5>2008 - 2013</h5>
                                    <p>https://udelar.edu.uy/portal/</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-2 d-none d-sm-block py-3 my-auto">
                                    <img src="images/edificio.png" alt="edificio" class="img-fluid baw">
                                </div>
                                <div class="col-sm-10 p-3">
                                    <h3>Carrera</h3>
                                    <h4>Lugar</h4>
                                    <h5>Duración</h5>
                                    <p>link empresa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-2 d-none d-sm-block py-3 my-auto">
                                    <img src="images/edificio.png" alt="edificio" class="img-fluid baw">
                                </div>
                                <div class="col-sm-10 p-3">
                                    <h3>Carrera</h3>
                                    <h4>Lugar</h4>
                                    <h5>Duración</h5>
                                    <p>link empresa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section id="formacion">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"></i> Cursos de desarrollo profesional
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 d-none d-sm-block py-3 my-auto">
                                <img src="images/Excel-Logo.jpeg" alt="excel" class="img-fluid baw">
                            </div>
                            <div class="col-sm-10 p-3">
                                <h3>Excel Azanzado</h3>
                                <h4>THN Informática</h4>
                                <h5>2017</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 d-none d-sm-block py-3 my-auto">
                                <img src="images/valencia.jpeg" alt="edificio" class="img-fluid baw">
                            </div>
                            <div class="col-sm-10 p-3">
                                <h3>ODS en la Agenda 2030 de las Naciones Unidas</h3>
                                <h4>Universitat Politècnica de València mediante edX.</h4>
                                <h5>enero-mayo 2022</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 d-none d-sm-block py-3 my-auto">
                                <img src="images/logo-depcsuite.svg" alt="edificio" class="img-fluid baw">
                            </div>
                            <div class="col-sm-10 p-3">
                                <h3>Programación Web Full Stack</h3>
                                <h4>DEPCSUITE SA</h4>
                                <h5>cursando</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 d-none d-sm-block py-3 my-auto">
                                <img src="images/edificio.png" alt="edificio" class="img-fluid baw">
                            </div>
                            <div class="col-sm-10 p-3">
                                <h3>Carrera</h3>
                                <h4>Lugar</h4>
                                <h5>Duración</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 d-none d-sm-block py-3 my-auto">
                                <img src="images/edificio.png" alt="edificio" class="img-fluid baw">
                            </div>
                            <div class="col-sm-10 p-3">
                                <h3>Carrera</h3>
                                <h4>Lugar</h4>
                                <h5>Duración</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 d-none d-sm-block py-3 my-auto">
                                <img src="images/edificio.png" alt="edificio" class="img-fluid baw">
                            </div>
                            <div class="col-sm-10 p-3">
                                <h3>Carrera</h3>
                                <h4>Lugar</h4>
                                <h5>Duración</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0 px-3">
                        <div class="row mr-sm-1 me-sm-1 shadow img-idioma bg-white">
                            <div class="col-4 text-center msj">
                                <i class="fa-solid fa-message"></i>
                            </div>
                            <div class="col-8 p-4">
                                <h2>IDIOMAS</h2>
                                <h3>ESPAÑOL - Nativo</h3>
                                <h3>INGLÉS - Intermediate B2</h3>
                                <h3>PORTUGUES - Avanzado C1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 me-sm-1 shadow img-idioma bg-white">
                            <div class="col-4 text-center msj">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="col-8 p-4">
                                <h2>HOBBIES</h2>
                                <h3>Patin</h3>
                                <h3>Música</h3>
                                <h3>Viajar</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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