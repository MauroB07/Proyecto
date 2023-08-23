<?php

$nombre = $_POST['nombre'];
$password = $_POST['password'];

session_start();
$_SESSION['nombre']=$nombre;

$coneccion = mysqli_connect("localhost","root","","bd_pagina");

$consulta = "SELECT * FROM usuario where nombre= '$nombre' and passwordd = '$password'";
$resultado=mysqli_query($coneccion,$consulta);

$filas=mysqli_fetch_array($resultado);
  
if($filas['rol_id']== 1){ //administrador

    header("Location:http://localhost/Pagina/index.php");
    
    

}else

if($filas['rol_id']== 2){
    header("location:http://localhost/Pagina/index.php");
   
    exit;
}

else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad"> Error en la autentificacion</h1>
    <?php 
}



mysqli_free_result($resultado);
mysqli_close($coneccion);