<?php 
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=$sesion->get('_Email');
$usuario=$gestor->get($email);
$clave=$usuario->getClave();
//echo '_------------------------'.$clave;

if($email===null){
    echo 'Error de permisos, no es un administrador de la base de datos';
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
                <span>CAMBIAR EMAIL</span><br></br>
        
       <form action="../oauth/enviar2.php" method="post">
            <span>Introduzca su nuevo correo electrónico: </span><input type="email" name="email" maxlength="60"/>

             <input type="hidden" value=<?php echo $email ?> name="emailOld"/></br>
            <input type="submit" value="Modificar"/>
        </form>
        </div>
        </div>
        <?php }?>
      
    </body>
    
</html>
