<?php
    include('conectar.php');

    
    

    $new_id_selecionada = $_POST['id_selecionada'];
    $nueva_name = $_POST['name'];
    $nueva_sinopsis = $_POST['sinopsis'];
    $nueva_img = $_POST['img'];

    
    
    
    $sql3 = "SELECT * FROM pelicula WHERE id = $new_id_selecionada";
    $resultado3 = mysqli_query($conexion, $sql3);
    
    if (mysqli_num_rows($resultado3) > 0) {
        // La ID ingresada coincide con la base de datos, actualizar la información de las columnas
        $sql4 = "UPDATE pelicula SET nombre='$nueva_name', sinopsis='$nueva_sinopsis', img='$nueva_img' WHERE id=$new_id_selecionada";
        $resultado4 = mysqli_query($conexion, $sql4);
    
        header("Location: ../Edit_index.php ");
        exit();
    } else {
        echo "La ID ingresada no coincide con la base de datos.";
    }
?>