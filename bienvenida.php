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
</head>
<body>
    <h1>Bienvenido a la pagina, usuario!!</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>