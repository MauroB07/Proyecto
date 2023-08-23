<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/Pelfil.css">
  <title>Document</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="logo">
        <label for="btn-menu" class="icon-menu"></label>
        <a href="#">MoviesForYou</a>
      </div>
      <form class="buscador" action="php/search.php" method="POST">
        <label for="2">.</label>
        <input type="text" id="nombre" name="nombre" placeholder="  Nombre de la pelicula">
        <input type="submit" value=" Buscar ">
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
  <div class="contenedor">
    <div class="contenedor2">
      <div class="tarjeta">
        
        <div class="imagen">
          <img class="img-perfil" src="img/perfil.png" alt="">
        </div>
        <div class="tabla-cont">
          <table class="tabla">
            <caption class="caption">Perfil</caption>
            <tr>
              <td class="td">Nombre:</td>
              <td class="td">Mauro</td>
            </tr>
            <tr>
              <td class="td">Apellido</td>
              <td class="td">Berni</td>
            </tr>
            <tr>
              <td class="td">Email</td>
              <td class="td">mauro@gmail.com</td>
            </tr>
            <tr>
              <td class="td">Contacto</td>
              <td class="td">22345452</td>
            </tr>
          </table>
        </div>
        <div class="opciones">
            <h4>Cuenta</h4>
            <input class="opc" type="button" value="Editar">
            <input class="opc" type="button" value="Eliminar">
        </div>
      </div>
    </div>
  </div> 
</body>
</html>
