<?php 

session_start();

include ('conectar.php');
$user = $_SESSION['nombre'];

$sql = "SELECT id, nombre, apellido, email, passwordd, rol_id FROM usuario WHERE nombre= '$user'";

$resultado =$conexion->query($sql);

while($data=$resultado->fetch_assoc()){
        $id = $data['id'];
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $email = $data['email'];
        $password = $data['passwordd'];
        $rol_id = $data['rol_id'];
}

function crear($rol_id){
    if($rol_id==1){
        echo "<a href='http://localhost/Pagina/i_crudPelicula.php'>Administar</a>";
        //echo '<input type="submit" name="enviar" class="boton" value="Registrate">';
    }
   
    

}



?>