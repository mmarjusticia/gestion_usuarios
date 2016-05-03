<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=$sesion->get('_Email');
$usuario=$gestor->get($email);
$personal=$usuario->getPersonal();
if($email===null||$personal!=1){
    echo 'Error de permisos, no pertenece al personal de la base de datos';
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
        
        <div id="perfil">
        <h1>Bienvenido la zona del personal</h1>
        <h2>PERFIL</h2>
        <span>Alias:</span> <span><?php echo $usuario->getAlias();?></span></br>
         <span>Email:</span> <span><?php echo $usuario->getEmail();?></span></br>
         </div>
        <div id="zona"> 
        <div><a class="opcion" href="modificarAlias.php">Modificar Alias</a></div>
        <div> <a class="opcion" href="modificarClave.php">Modificar Clave</a></div>
        <div><a class="opcion" href="modificarEmail.php">Modificar Email</a></div>
        <div><a class="opcion" href="listarUsuarios.php">Listar a los usuarios de la base de datos</a></div>
        <div><a class="opcion" href="altaUser.php">Dar de alta a un usuario</a></div>
        <div><a class="opcion" href="cerrarSesion.php">Cerrar Sesión</a></div> 
         </div> 
        
    </body>
</html>
<?php }?>