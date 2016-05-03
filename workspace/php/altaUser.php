<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
    $email=$sesion->get('_Email');
    $usuario=$gestor->get($email);
    $administrador=$usuario->getAdministrador();
    $personal=$usuario->getPersonal();
    if($administrador==1||$personal==1)
{
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../estilo/estilo.css">
    </head>
    <body><div id="container">
            <img  id="cabecera" src="../estilo/imagenes/cabecera.jpg" alt="cabecera"/>
       
       
            <div id="zonaUsuarioN">
        <div>Registro de un usuario:</div><br></br>
        <form action="phpaltauser.php" method="post">
            
            <div><span>Correo electrónico:</span><input type="email" name="email" maxlength="60"/></div>
            <div><span>Contraseña:</span><input type="password" name="clave" maxlength="40"/></div>
            <div><span>Repita su contraseña:</span><input type="password" name="claveR" maxlength="40"/></div>
            <input  id="registro" type="submit" value="Registrar"/>
        </form>
     </div>
        </div>
            </body>
    
</html>
<?php }else{
         echo 'Error de permisos, No puede acceder a este contenido';
}?>