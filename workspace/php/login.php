<?php 
require '../clases/AutoCarga.php';

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
          <form  name="login" action="phplogin.php" method="POST">
                  <div id="etiqueta">
                    <div id="usuario">
                        <span>Usuario:</span>
                        <input id="us" type="text" name="user" value="" placeholder="Usuario:"/>
                    </div>
                    <div id="contrasena">
                        <span>Password:</span>
                        <input id="cont" type="password" name="password" value="" placeholder="Password:"/>
                    </div>
                    <div id="enviar">
                    <input type="submit" value="Login" name="login" id="send"/>
                    </div>
                  </div>
                </form>
                <a href="recuperarClave.php">¿Olvidaste tu contraseña?</a>
                </div>
    </body>
</html>