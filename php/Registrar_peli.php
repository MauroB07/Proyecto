<?php 
    include("conectar.php");
    if(isset($_POST['register'])){

        // $img = $_FILES['img']['name'];
        // $temporal = $_FILES['img']['tmp_name'];
        // $carpeta = '../img';
        // $ruta = $carpeta.'/'.$img;
        // move_uploaded_file($temporal,$carpeta.'/'.$img);

        if(strlen($_POST['name']) >= 1 && strlen($_POST['sinopsis']) >= 1){
            $name = trim($_POST['name']);
            $sinopsis = trim($_POST['sinopsis']);
            // $img = 'hola'; 
            $img = trim($_POST['img']);
            
            

            $consulta = "INSERT INTO pelicula /*datospeli*/ (nombre, sinopsis, img) VALUES ('$name','$sinopsis','$img')";
            $resultado = mysqli_query($conexion,$consulta);
            
        }
    }
    header('Location: ../Regist_peli.php');
    
?>
