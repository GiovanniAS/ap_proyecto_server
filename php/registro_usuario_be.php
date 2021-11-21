<?php
    include 'connection.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    //encriptación de contraseña
    $password = hash('sha512', $password);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password)
              VALUES('$nombre_completo','$correo','$usuario','$password')";
    
    //Verificar que el correo no se repita en la db
    $verificar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0){
       echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
       ';
       exit();
    }

    //Verificar que el nombre de usuario no se repita en la db
    $verificar_usuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){
       echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
       ';
       exit();
    }

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