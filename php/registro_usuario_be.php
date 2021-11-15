<?php
    include 'connection.php';

    $nombre_completo = $_POST['nombre_completo'];
    $corrreo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password)
              VALUES('$nombre_completo','$corrreo','$usuario','$password')";
    
    $ejecutar = mysqli_query($conn, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentelo nuevamente, usuario no almacenado");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conn);

?>