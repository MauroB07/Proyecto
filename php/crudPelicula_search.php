<?php
    include('conectar.php');
    $searchPelicula = trim($_GET['searchPelicula']);

    $consulta = "SELECT * FROM pelicula WHERE titulo LIKE '%$searchPelicula%'";
    $resultado = mysqli_query($conexion,$consulta);
    
    if($resultado){
        foreach($resultado as $fila){

            $id_pelicula = $fila['id_pelicula']; 
            $nombre = $fila['titulo']; 
            $sinopsis = $fila['sinopsis']; 
            $fecha = $fila['fecha']; 
            $img = $fila['img']; 
            $generos = $fila['generos']; 


            if($img != null){
                $img = 'SI';
            }else{
                $img = 'NO';
            }

            echo"
                <tr>
                    <td>$id_pelicula</td>
                    <td>$nombre</td>
                    <td>$sinopsis</td>
                    <td>$generos</td>
                    <td>$fecha</td>
                    <td>$img</td>
                </tr>
            ";

        }

    }

?>