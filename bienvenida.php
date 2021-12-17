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
    <!-- header-menu -->
    <header>
        <div class="header-content">
            <div class="logo">
                <h1>Bienvenido<b> Usuario</b></h1>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Ayuda</a></li>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li class="menu-selected"><a href="php/cerrar_sesion.php" class="text-menu-selected">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--<a href="php/cerrar_sesion.php">Cerrar sesion</a>-->

    <!-- Portada --><br><br><br><br>
    
    <div class="container-cover">
        <div class="container-info-cover">
            <h1>Aplicaciones de internet</h1>
            <p>Proyecto final</p>
            <p>Este proyecto fue creado por: </p>
            <p>GIOVANNI DANIEL AGUIRRE SALINAS</p>
            <p>ADRIAN FEDERICO SALDAÑA AGUILAR</p>
        </div>
    </div>

    </div>
</body>
</html>