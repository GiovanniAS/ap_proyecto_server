<?php
    // We need to use sessions, so you should always start sessions using the below code.
    session_start();
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido usuario</title>
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <h1>Bienvenido<b>User</b></h1>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Etc</a></li>
                        <li><a href="#">About</a></li>
                        <li class="menu-selected"><a href="#" class="text-menu-selected">Contacto</a></li>
                        <li><a href="php/cerrar_sesion.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--<a href="php/cerrar_sesion.php">Cerrar sesion</a>-->
</body>
</html>