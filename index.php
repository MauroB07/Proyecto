<?php 
require 'php/conexion.php';
require 'php/config.php'; 
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT id_pelicula, titulo, img FROM pelicula");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/Index.css">
    <title>Document</title>
</head>
<header class="header">
    <div class="container">
        <div class="logo">
            <label for="btn-menu" class="icon-menu"></label>
            <a href="#">MoviesForYou</a>
        </div>
        <form class="buscador" action="php/search.php" method="POST">
            <label for="2">.</label>
            <input class="busq" type="text" id="nombre" name="nombre" placeholder="  Nombre de la pelicula">
            <input  class="busq" type="submit" value=" Buscar ">
        </form>
    </div>
</header>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
    <div class="cont-menu">
        <nav>
            <div class="imagen-perfil">
                <img src="img/perfil.png" alt="">
            </div>
            <a href="#">Perfil</a>
            <a href="#">Busqueda avanzada</a>
            <a href="#">Lo nuevo!</a>
            <a href="#">Contacto</a>
            <?php 
            //include ('php/Funciones.php');
            //crear($rol_id);
            ?>
            <label for="btn-menu" class="icon-cancel-squared"></label>
        </nav>
    </div>
</div>
<body>
   <div class="contenedor">
   <?php foreach ($resultado as $row) { ?>
    <?php 
    $img = $row['img'];  
    $titulo = $row['titulo'];    
    ?>
    <div class='pelicula'>  
       <a href="Detalles.php?id_pelicula=<?php echo $row['id_pelicula']; ?>&token=<?php echo 
       hash_hmac('sha1', $row['id_pelicula'], KEY_TOKEN);?>">     
        <img class='peli' src='<?php echo $img; ?>' alt='<?php echo $titulo; ?>'>
        </a>
        <div class='nombre'>
            <p><?php echo $row['titulo']; ?></p>
        </div>
    </div>
    <?php } ?>

   </div> 
</body>
<footer class="footer">
    <div class="contacto_1">
        
        <img class="red_social" src="img/facebook.png" alt="Facebook">
        <img class="red_social" src="img/twiter.png" alt="Twiter">
        <img class="red_social" src="img/instagram.png" alt="Instagram">
    </div>
    <div class="contacto_2">
        <h4>MoviesForYou</h4>
        <p>Ver peliclas y series en streaming para ti</p>
        <p>Derechos de autor © 2023 </p>
    </div>
    <div class="contacto_3">
        <form class="form" action="">
            <p>Contactenos</p>
            <input id="campos" type="email" name="Gmail" placeholder="Ingrese email" required>
            <input id="campos" type="text" name="Asunto" placeholder="Asunto" >
            <input id="campos" type="text" name="Mensaje" placeholder="Mensaje" required>
            <input id="campos" type="submit" name="Enviar" placeholder="Enviar">
        </form>
    </div>
</footer>
</html>
