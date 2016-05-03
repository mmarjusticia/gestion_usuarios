<?php
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();
$email=Request::post("user");
if($email==='admin'){
  //  echo 'es administrador';
    $email='jluislechado@gmail.com';
   // echo $email;
    $usuario=$gestor->get($email);
    $em=$usuario->getEmail();
   // echo 'soy el email'.$em;
}
$clave=Request::post("password");
$usuario=$gestor->get($email);

$emailGuardado=$usuario->getEmail();
echo 'emailGuardado:'.$emailGuardado;
$claveGuardada=$usuario->getClave();
echo 'clave que hay guardada:'. $claveGuardada;
$administradorG=$usuario->getAdministrador();
echo 'administradorGuardado'.$administradorG;
$activo=$usuario->getActivo();
echo 'activoGuardado'.$activo;
$bandera=Request::post('bandera');
$personal=$usuario->getPersonal();
//echo 'bandera'.$bandera;
//echo 'personal'.$personal;


if($emailGuardado==null){
    $sesion->sendRedirect('error.php');
    
}
else{

    $claveCifrada=sha1($clave.Constant::SEMILLA);
    echo 'claveCifrafa'.$claveCifrada;
    echo '------------------'.$claveGuardada;
   
    
    if($usuario->getClave()===$claveCifrada){
        echo 'puedes acceder';
         $sesion->set('_Email',$emailGuardado);
        if($bandera==='administrador') {
            $sesion->sendRedirect('administrador.php');
      }
        
        else{
            if($personal==='1'){
              $sesion->sendRedirect('personal.php');}
              else{  $sesion->sendRedirect('usuario.php');}
              
        }
          
       
       
       // $email=$sesion->get('_Email');
       //echo 'email'.$email;
    } 
    else{echo 'contraseña erronea';
        $gestor->delete($email);
        
    }
}
    


?>