<?php  
$servername = "localhost:3308";  
$username = "root";  
$password = "root";  
$database = "login_register_db";  
/*
$conn = new mysqli($servername, $username, $password, $database);  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}
else
    echo "Connection sucessful <br>";
?>
*/
$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    $reponse['error']=true;
    $reponse['message']="Connection failed: " . $conn->connect_error;
    die(json_encode($reponse));
}
?>
