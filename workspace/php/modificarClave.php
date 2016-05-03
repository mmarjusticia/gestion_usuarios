<?php 
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=$sesion->get('_Email');
$usuario=$gestor->get($email);

if($email===null){
    echo 'Error de permisos, no es un usuario de la base de datos';
}
else{

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
        <div id="zona">
            <div id="mod">
          <form  name="login" action="nuevaClave.php" method="POST">
             
               <span>Introduzca su nueva contraseña:  </span><input type="password" value="" name="claveNew"/><br></br>
               <span>Repita su nueva contraseña:  </span><input type="password"value="" name="claveR"/><br></br>
               
              <input type="submit" value="Cambiar"/>
              <input type="hidden" name="bandera" value="true"/>
           </form> 
           </div></div>
           <?php }?>