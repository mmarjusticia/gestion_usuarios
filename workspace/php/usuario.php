<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
//echo 'zona de usuario';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
//$email=$sesion->get('email');
;
$email=$sesion->get('_Email');
//echo $email;
if($email===null){
    echo 'error, no es un usuario de la base de datos';
}
else{
$usuario=$gestor->get($email);
//echo $usuario->getEmail();
//echo 'alias:'.$usuario->getAlias();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../estilo/estilo.css">
    </head>
    <body>
       <div id="container">
            <img  id="cabecera" src="../estilo/imagenes/cabecera.jpg" alt="cabecera"/>
       
        <div id="perfil">
        <h1>Bienvenido a tu zona de usuario</h1>
        <h2>PERFIL</h2>
        <span>Alias:</span> <span><?php echo $usuario->getAlias();?></span></br>
         <span>Email:</span> <span><?php echo $usuario->getEmail();?></span></br>
         <span>Fecha de Alta</span><?php echo $usuario->getFechaAlta() ;?></span></br>
        </div>
       <div id="zona">
       <div class="opcion"><a href="modificarAlias.php">Modificar Alias</a></div>
       <div class="opcion"> <a href="modificarClave.php">Modificar Clave</a></div>
       <div class="opcion"> <a href="modificarEmail.php">Modificar Email</a></div>
       <div class="opcion"> <a href="cerrarSesion.php">Cerrar Sesión</a></div>
        </div>
        
        
    </body>
</html>
<?php }?>