<?php
// Establecer una conexión con la base de datos
$conn = mysqli_connect("localhost", "root", "", "bd_pagina");

// Verificar si se ha enviado el formulario
if (isset($_POST['save'])) {
  // Obtener los valores del formulario
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validar los valores si es necesario
  // ...

  // Actualizar los datos del registro en la base de datos
  $query = "UPDATE usuario SET nombre='" . ($nombre ? $nombre : "") . "', apellido='" . ($apellido ? $apellido : "") . "', email='" . ($email ? $email : "") . "', password='" . ($password ? $password : "") . "' WHERE id=$id";
  $result = mysqli_query($conn, $query);

  // Verificar si se ha actualizado el registro correctamente
  if ($result) {
    echo "Los cambios se han guardado correctamente.";
  } else {
    echo "Error al guardar los cambios: " . mysqli_error($conn);
  }
} else if (isset($_POST['edit'])) {
  // Obtener el ID del registro a editar
  $id = $_POST['id'];

  // Recuperar la información del registro
  $result = mysqli_query($conn, "SELECT * FROM usuario WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // Mostrar la información en un formulario de edición
  echo '<div id="cuadro">';
    echo '    <form id="formularioedit" method="post">';
    echo '        <input id="inputs" type="hidden" name="id" value="'.$id.'">';
    echo '       <p>Nombre:</p> <input id="inputs" type="text" name="nombre" value="'.$row['nombre'].'"><br>';
    echo '        <p>Apellido:</p> <input id="inputs" type="text" name="apellido" value="'.$row['apellido'].'"><br>';
    echo '        <p>Email:</p> <input id="inputs" type="email" name="email" value="'.$row['email'].'"><br>';
    echo '        <p>Password:</p> <input id="inputs" type="password" name="password" value="'.$row['password'].'"><br>';
    echo '        <br>';
    echo '        <input id="inputs_guardar" type="submit" name="save" value="Guardar">';
    echo '    </form>';
    echo '</div>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
