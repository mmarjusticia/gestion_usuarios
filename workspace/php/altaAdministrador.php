<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
    $email=$sesion->get('_Email');
    $usuario=$gestor->get($email);

    if($email===null){
         echo 'Error de permisos, no es un administrador de la base de datos';
}
else{
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="../estilo/estilo.css">
        <title></title>
    </head>
    <body>
       <div id="container">
            <img  id="cabecera" src="../estilo/imagenes/cabecera.jpg" alt="cabecera"/>
       
       
            <div id="zonaUsuarioN">
        <div>Registro de un administrador:</div><br></br>
        <form action="phpaltaadmin.php" method="post">
            <span>Correo electrónico:  </span><input type="email" name="email" maxlength="60"/></br>
            <span>Contraseña:  </span><input type="password" name="clave" maxlength="40"/></br>
            <span>Repita su contraseña:  </span><input type="password" name="claveR" maxlength="40"/></br>
            <input type="submit" value="Registrar"/>
        </form>
        </div>
        </div>
      
    </body>
    
</html>
 <?php }?>
