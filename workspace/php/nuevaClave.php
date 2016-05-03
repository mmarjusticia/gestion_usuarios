<?php 
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$bandera=Request::post('bandera');

if($bandera!='false'){
        $email=$sesion->get('_Email');
        $usuario=$gestor->get($email);}
else{   $email=Request::post('email');
        $usuario=$gestor->get($email);
       
}

$claveNew=Request::post("claveNew");
$claveR=Request::post("claveR");


if($claveR==""||$claveNew==""){
    echo "debe rellenar todos los campos";
}
else{

      if($claveNew!=$claveR){
         echo 'Ha metido dos claves que no coinciden';
          //$sesion->sendRedirect('modificarClave.php'); 
          
      }
      else{
       
        $usuario=$gestor->get($email);
        $fechaAlta=$usuario->getFechaAlta();
        $activo=$usuario->getActivo();
        $administrador=$usuario->getAdministrador();
        $trabajador=$usuario->getPersonal();
        $alias=$usuario->getAlias();
        $contrasenia=sha1($claveNew.Constant::SEMILLA);
        $usuario2= new Usuario($email,$contrasenia,$alias,$fechaAlta,$activo,$administrador,$trabajador); 
        $gestor->set($usuario2);
        
  // $sesion->sendRedirect('usuario.php'); 
  }}
   ?>
   <br/>
   <?php 
   if($bandera!='false'){?>
     <a href="usuario.php">Regresar a mi perfil</a><?php }
     else{?>
     <h3>La contraseña se ha modificado con éxito</h3>
       <a href="index.php">Acceder</a> <?php 
     }
     ?>
   