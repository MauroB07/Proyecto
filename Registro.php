<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Usuario.css">
    <title>Registro</title>
</head>

<body>
    
    <div class="opcion1">
        <div class="titulo">
            <h1>SingUP</h1>
        </div>
        <div class="CrearUsuario">
        
            <form action="php/Registrarse.php" method="POST" name="Nuevo Usuario">
                
                <p>Nombre</p>
                <input type="text" name="nombre" placeholder="Ingrese Nombre" required>
    
                <p>Apellido</p>
                <input type="text" name="apellido" placeholder="Ingrese apellido" required>
                
                <p>Email</p>
                <input type="email" name="email" placeholder="Ingrese email" required>
                
                <p>Contraseña</p>
                <input type="password" name="password" placeholder="Ingrese password" required maxlength="30" autocomplete="new-password" >
                
                <p>Rol_id<p>
                <input type="number" name="rol_id" placeholder="Ingrese rol" >
                <br>
                <input type="submit" name="enviar" class="boton" value="Registrate">
                
            </form>
        </div>
    </div>
    <div class="opcion2">
        <div class="titulo">
            <h1>Login</h1>
        </div>
        <div class="IniciarSesion">
        
            <form  action="php/IniciarSesion.php" method="post">
    
                <p>Nombre</p>
                <input type="text" name="nombre" placeholder="Ingrese nombre" required>
                
                <p>Contraseña</p>
                <input type="password" name="password" placeholder="Ingrese password" required maxlength="30" autocomplete="new-password" >
                <br>
                <input type="submit" name="enviar" class="boton" value="Registrate">
            </form>
        </div>
    </div>
   
</body>
</html>