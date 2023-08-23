<?php
    
    include("conectar.php");
    session_start();
 
    $nombre = "";
    $apellido = "";
    $email = "";
    $password = "";

    


    if(isset($_POST['nombre'])){
        $nombre = trim($_POST['nombre']);
    }

    if(isset($_POST['apellido'])){
        $apellido = trim($_POST['apellido']);
    }

    if(isset($_POST['email'])){
       $email = trim($_POST['email']);
    }

    if(isset($_POST['password'])){
        $password = trim($_POST['password']);
    }
    if(isset($_POST['rol_id'])){
        $rol_id = trim($_POST['rol_id']);
    }


    $consulta = "INSERT INTO usuario(nombre, apellido, email, passwordd, rol_id) VALUES ('$nombre','$apellido','$email', '$password', '$rol_id')";
    $resultado = mysqli_query($conexion, $consulta);
    header("location:http://localhost/Pagina/index.php");
?>