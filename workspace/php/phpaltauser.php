<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd=new DataBase();
$gestor=new ManageUsuario($bd);
$sesion = new Session();
$email=Request::post('email');
$clave=Request::post('clave');
$claveR=Request::post('claveR');
$consulta=$gestor->get($email)->getEmail();
if($consulta!=null){
    header("Location:yaexiste.php");
    echo 'No puede registrarse porque ya existe un usuario para este email';
}
else{
      if($clave===$claveR){
        $alias=$email;
        $destino=$email;
        $claveCifrada=sha1($clave.Constant::SEMILLA);
        $sha1=  sha1($destino.Constant::SEMILLA);
        $fechaAlta=date('Y-m-d');
        $usuario= new Usuario($email,$claveCifrada,$alias,$fechaAlta,1,0,0);
        $gestor->insert($usuario);
        header("Location:exito.php");
        
} else  header("Location:errorDatos.php");}
?>