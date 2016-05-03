<?php
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();

$alias=Request::post("user");
$clave=Request::post("password");
$usuario=$gestor->getPorAlias($alias);
$emailGuardado=$usuario->getEmail();
$claveGuardada=$usuario->getClave();
$administradorG=$usuario->getAdministrador();
$activo=$usuario->getActivo();
$personal=$usuario->getPersonal();

$bandera=Request::post('bandera');

if($emailGuardado==null){
    
    echo 'El alias introducido no aparece registrado en la base de dartos';
    
}
else{

    $claveCifrada=sha1($clave.Constant::SEMILLA);
    
    if($usuario->getClave()===$claveCifrada){
       if($activo==1){
         $sesion->set('_Email',$emailGuardado);
        if($bandera==='administrador') {
            $sesion->sendRedirect('administrador.php');
      }
        
        else{
            if($personal=='1'){
              $sesion->sendRedirect('personal.php');}
              else{  $sesion->sendRedirect('usuario.php');}
              
        }
          
       
       
       // $email=$sesion->get('_Email');
       //echo 'email'.$email;
    }else{
        echo 'no puede acceder, al registro le falta un paso, por favor,verifique primero su correo.';
    }
        
    } 
    else{echo 'clave erronea';
        $gestor->delete($email);
        
    }
}
    


?>