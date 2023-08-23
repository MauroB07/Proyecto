<?php
    include('conectar.php'); // modify

    $id_pelicula = trim($_POST['id_pelicula']);
    $nombre = trim($_POST['titulo']);
    $sinopsis = trim($_POST['sinopsis']);
    $generos = trim($_POST['generos']);
    $url = trim($_POST['url']);
    $fechaEstreno = trim($_POST['fechaEstreno']);

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    
        if ($action === 'insert') {
            
            $insert = "INSERT INTO pelicula(titulo, sinopsis, fecha, img, generos) VALUES('$nombre','$sinopsis','$fechaEstreno','$img','$generos')";
            $resultado = mysqli_query($conexion,$insert);
            header('Location: ../i_crudPelicula.php'); // mod-dic

        } elseif ($action === 'delete') {
            
            $delete = "DELETE FROM pelicula WHERE id_pelicula = '$id_pelicula'";
            $resultado = mysqli_query($conexion,$delete);
            header('Location: ../i_crudPelicula.php'); // mod-dic
            
        }elseif($action === 'modify'){
            $update = "UPDATE pelicula SET titulo = '$nombre', sinopsis = '$sinopsis', fecha = '$fechaEstreno', img = '$img', generos = '$generos'  WHERE id_pelicula = '$id_pelicula'";
            $resultado = mysqli_query($conexion,$update);
            header('Location: ../i_crudPelicula.php'); // mod-dic
        }
    }


?>