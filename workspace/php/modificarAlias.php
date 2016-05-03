<?php 
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=$sesion->get('_Email');
$usuario=$gestor->get($email);
if($email===null){
    echo 'Error de permisos, no es un administrador de la base de datos';}else{

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
          <form  name="login" action="nuevoAlias.php" method="POST">
              <span>CAMBIAR ALIAS</span><br></br>
              
              <span>Introduzca su nuevo Alias: </span><input type="text" name="nuevoAlias"/></br>
              <input type="submit" value="Cambiar"/>
              <input type="hidden" name="bandera" value="true"/>
           </form> 
           </div>
    </div>
   
  <?php }?>
    

 
    
    </body>
</html>