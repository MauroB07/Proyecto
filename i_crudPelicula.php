<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/crudPelicula.css"> <!-- mod-dic -->
</head>
<body>

    <h2>Administrar Pelicula</h2>

    <div id="formulario_pelicula">
        <div>
            <form id="formulario" method="post" action="php/crudPelicula.php" enctype="multipart/form-data"> <!-- mod-dic -->

                <textarea id="miTextArea" oninput="verificarTextArea()" name="id_pelicula" cols="30" rows="1" placeholder="id_pelicula"></textarea> <br> <!-- mod-dic -->
                <textarea name="nombre" cols="30" rows="1" placeholder="Titulo"></textarea> <br>
                <textarea name="sinopsis" cols="30" rows="10" placeholder="Sinopsis"></textarea> <br>
                <textarea name="generos" cols="30" rows="5" placeholder="Generos"></textarea> <br>
                <textarea name="url" cols="30" rows="1" placeholder="URL img"></textarea> <br>

                <p>Fecha Estreno</p>
                <input name="fechaEstreno" type="date"> <br>

                <button id="miBoton" name="action" value="insert" >Agregar</button> <!--este boton por efecto del Js viene con un margin (preguntar a Leo xd)-->
                <button id="btnModify" name="action" value="modify" >Modificar</button> <br>
                <button id="btnDelete" name="action" value="delete" >Eliminar</button> <br>

            </form> 
        </div>
    </div>

    <h2>Lista de peliculas</h2>

    <div id="listaPeliculas">
        
        <form action="" method="get">
            <input type="text" name="searchPelicula" placeholder="Buscar">
            <button type="submit" name="enviar" value="buscar">Refrescar</button>
        </form>
        
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID Pelicula</th>
                    <th>Titulo</th>
                    <th>Sinopsis</th>
                    <th>Generos</th>
                    <th>Fecha Estreno</th>
                    <th>IMG</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include('php/crudPelicula_search.php');
                ?>
            </tbody>

        </table>
    </div>

    
    <script src="Js/crudPelicula.js"></script> <!-- mod-dic -->

</body>
</html>