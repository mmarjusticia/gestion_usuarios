<?php
require '../clases/AutoCarga.php';
$bd=new DataBase();
$gestor=new ManageUsuario($bd);
$email=  Request::get("email");
$r=$gestor->delete($email);
if($r==false){
    echo 'ha habido un error';
}
else{
    header("location:correctoUsuario.php");
};

?>