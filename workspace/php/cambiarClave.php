<?php
require '../clases/AutoCarga.php';
$bd=new DataBase();
$gestor=new ManageUsuario($bd);
$sesion=new Session();

$email=Request::get('email');
echo 'email:'.$email;
$sha1=Request::get('sha1');
$emailCifrado=sha1($email.Constant::SEMILLA);

if($emailCifrado===$sha1){


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
          <form  name="login" action="nuevaClave.php" method="POST">
             
               <span>Introduzca su nueva contraseña</span><input type="password" value="" name="claveNew"/>
               <span>Repita su nueva contraseña</span><input type="password"value="" name="claveR"/>
               
              <input type="submit" value="Cambiar"/>
              <input type="hidden" name="bandera" value="false"/>
              <input type="hidden" name="email" value="<?php echo $email;?>"/>
           </form> 
           </div>
    </body>
</html>
<?php } else{
    
}