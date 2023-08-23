<?php 
require 'php/config.php';
require 'php/conexion.php';
$db = new Database();
$con = $db->conectar();



$id = isset($_GET['id_pelicula']) ? $_GET['id_pelicula'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if ($id == '' || $token == ''){
    echo 'Error al realizar la peticion 1';
    exit;
}else{
    $token_tpm = hash_hmac('sha1', $id, KEY_TOKEN);

    if($token == $token_tpm){
        $sql = $con->prepare("SELECT count(id_pelicula) FROM pelicula WHERE id_pelicula=?");
        $sql->execute([$id]);

        if($sql->fetchColumn() > 0){
            $sql = $con->prepare("SELECT titulo, sinopsis, fecha, generos, img FROM pelicula WHERE id_pelicula=?");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $titulo = $row['titulo'];
            $sinopsis = $row['sinopsis'];
            $fecha = $row['fecha'];
            $generos = $row['generos'];
            $img = $row['img'];
        }


    }else{
        echo 'Error al realizar la peticion 2';
    }
}
/*$sql = $con->prepare("SELECT * FROM pelicula");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dt.css">
    <link rel="stylesheet" href="css/fontello.css">
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
            <input type="text" id="nombre" name="nombre" placeholder="  Nombre de la pelicula">
            <input  type="submit" value=" Buscar ">
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
                include ('php/Funciones.php');
                crear($rol_id);
            ?>
            <label for="btn-menu" class="icon-cancel-squared"></label>
        </nav>
    </div>
</div>
<body>
  <div class="contenedor">
    <div class ="contenedor2">
        <div class="imagen">
            <img class="img_peli" src="<?php echo $img?>" alt="venom">
        </div>
        <table class="tabla">
            <tr>
                <td>Titulo</td>
                <td class="datos "><?php echo $titulo?></td>
            </tr>
            <tr>
                <td>Generos</td>
                <td class="datos "><?php echo $generos?></td>
            </tr>
            <tr>
                <td>Sinopsis</td>
                <td class="datos "><?php echo $sinopsis?></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td class="datos "><?php echo $fecha?></td>
            </tr>
        </table>
        <div class="video">
            <h2 class="vista">Ver pelicula</h2>
            <img class="reproductor" src="img/Captura.png" alt="">
        </div>
    </div>
    
  </div> 
</body>
</html>
