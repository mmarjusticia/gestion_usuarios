<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=$sesion->get('_Email');
$sesion->set('_EmailAdmin',$email);
$usuario=$gestor->get($email);
$administrador=$usuario->getAdministrador();

if($email===null||$administrador!=1){
    echo 'Error de permisos, no es un administrador de la base de datos';
}
else{
$usuario=$gestor->get($email);
//echo $usuario->getEmail();//echo 'alias:'.$usuario->getAlias();
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
        <h1>Bienvenido la zona de administrador</h1>
         <span>Alias:</span> <span><?php echo $usuario->getAlias();?></span></br>
         <span>Email:</span> <span><?php echo $usuario->getEmail();?></span></br>
         </div>
         <div id="zona">
        <h2>PERFIL</h2>
       
          <div><a href="cerrarSesion.php">Cerrar Sesión</a> </div>
        <div class="ele">
        <div class="opcion2" id="modificarAlias"> <a href="modificarAlias.php">Modificar Alias</a></div>
        <div class="opcion2" id="modificarClave"><a href="modificarClave.php">Modificar Clave</a></div>
        <div class="opcion2" id="modificarEmail"><a href="modificarEmail.php">Modificar Email</a></div>
        <div class="opcion2" id="listarUsuarios"><a href="listarUsuarios.php">Listar a los usuarios de la base de datos</a></div>
        </div>
        <div class="ele">
        <div class="opcion2" id="listarPersonal"><a href="listarPersonal.php">Listar a los trabajadores de la base de datos</a></div>
        <div class="opcion2" id="altaAdministrador"><a href="altaAdministrador.php">Dar de alta a un administrador</a></div>
        <div class="opcion2" id="altaPersonal"><a href="altaPersonal.php">Dar de alta a un trabajador de la base de datos</a></div>
        <div class="opcion2" id="altaUser"><a href="altaUser.php">Dar de alta a un usuario</a></div>
      </div>
       
        </div>
        </div>
        
    </body>
</html>
<?php }?>