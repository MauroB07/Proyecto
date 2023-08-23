<?php 

session_start();
include ('conectar.php');
$user = $_SESSION['nombre'];

$sql = "SELECT id, nombre, apellido, email, passwordd, rol_id FROM usuario WHERE nombre= '$user'";

$resultado =$conexion->query($sql);

while($data=$resultado->fetch_assoc()){
        $id = $data['id'];
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $email = $data['email'];
        $password = $data['password'];
        $rol_id = $data['rol_id'];
    }


    //Este php llama la info de un usuario en expecifico



    



?>

