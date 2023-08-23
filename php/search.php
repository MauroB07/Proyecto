<?php      
$inc = include('conectar.php');

if ($inc) {
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];

            // Verificar si el usuario ya está en busqueda2.php
            if ($_SERVER['PHP_SELF'] !== '/Pagina/busqueda2.php') {
                // Redirigir a la misma página (busqueda2.php) al finalizar la consulta
                header("Location: http://localhost/Pagina/busqueda2.php?cartas=" . urlencode($nombre));

                exit; // Detener la ejecución después de la redirección
            }else{
                header("Location: http://localhost/Pagina/busqueda2.php?cartas=" . urlencode($nombre));

            }

                        

            

        }
    }
?>
