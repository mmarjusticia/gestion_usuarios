
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../estilo/estilo.css">
        </head>
    <body><div id="container">
            <img  id="cabecera" src="../estilo/imagenes/cabecera.jpg" alt="cabecera"/>
      
       
            
        <div>Registro:</div>
        <div id="zonaUsuarioN">
        <form action="../oauth/enviar.php" method="post">
           
             <div><span>Correo electrónico:</span><input type="email" name="email" maxlength="60"/></div>
             <div><span>Contraseña:</span><input type="password" name="clave" maxlength="40"/></div>
             <div><span>Repita su contraseña:</span><input type="password" name="claveR" maxlength="40"/></div>
             <div><input type="submit" value="Registrar"/></div>
        </form>
        </div>
   </div>
        <?php
        
        ?>
    </body>
</html>
