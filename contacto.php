<?php
    $pg = "contacto";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body id="contacto">
    <header>
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por Whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method=" POST">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre*"
                            class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo*"
                            class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp*"
                            class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <textarea type="mensaje" id="txtMensaje" class="form-control shadow"
                            placeholder="Escribe aquí tu mensaje*" required></textarea>
                    </div>
                    <div class="">
                        <button type="submit" class="btn px-4" id="btnEnviar" name="btnEnviar">ENVIAR</button>
                    </div>
                </form>
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