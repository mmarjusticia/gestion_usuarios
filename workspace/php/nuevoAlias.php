<?php 
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=$sesion->get('_Email');
$usuario=$gestor->get($email);
$alias=Request::post("nuevoAlias");
$us=$gestor->getPorAlias($alias);

if($us==""){
 echo 'entro';
 
  $clave=$usuario->getClave();
  $fechaAlta=$usuario->getFechaAlta();
  $activo=$usuario->getActivo();
  $administrador=$usuario->getAdministrador();
  $trabajador=$usuario->getPersonal();


  $usuario2= new Usuario($email,$clave,$alias,$fechaAlta,$activo,$administrador,$trabajador); 
  $gestor->set($usuario2);
if($usuario2->getAdministrador()==1){
 $sesion->sendRedirect('administrador.php');
}
else{
   $sesion->sendRedirect('usuario.php');
   }
   ?>
   <br/>
   
    <span>Su nuevo alias es:</span><span><?php echo $usuario->getAlias(); ?></span>
     <a href="usuario.php">Regresar a mi perfil</a>
     <?php
 
    }
     else{
     echo 'No puede usar este alias porque ya pertenece a otro usuario';
     
    
       } ?>