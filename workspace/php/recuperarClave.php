<?php 
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=$sesion->get('_Email');
$usuario=$gestor->get($email);
$clave=$usuario->getClave();
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
         <div id="zona">   
        <div >Registro:</div>
       <form action="../oauth/recordarClave.php" method="post">
            <span>Introduzca el correo electrónico con el que se registró: </span><input type="email" name="email" maxlength="60"/>
            <input type="submit" value="Recordar contraseña"/>
        </form>
        </div>
        </div>
       
    </body>
</html>

