<?php
require '../clases/AutoCarga.php';
$bd=new DataBase();
$sesion=new Session();
$gestor=new ManageUsuario($bd);
$pagina=1;
$nrpp=  Constant::NRPF;
$condicion='personal=0 and administrador=0';
$nrpp=Constant::NRPF;
$pagina=1;
$usuarios=$gestor->getListWhere($condicion);
$email=$sesion->get('_Email');
$us=$gestor->get($email);
$administrador=$us->getAdministrador();
$personal=$us->getPersonal();
//$emailAdmin=$sesion->get('_EmailAdmin');

if($email===null){
    echo 'Error de permisos, no puede acceder a la base de datos';
}
else{
    if($administrador==1||$personal==1){


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
           
        <div id="presentacion">Lista de usuarios</div>
          <div id="centrar">
     
        <table id="tabla1" border="1px solid">
            <thead>
            <th>Alias</th>
            <th>Email</th>
            <th>Fecha de alta</th>
            <th>activo</th>
            </thead>
        <?php
        foreach ($usuarios as $key => $value) {?>
            <tr>
            <td><?=$value->getAlias();?></td>
            <td><?=$value->getEmail();?></td>
            <td><?=$value->getFechaAlta();?></td>
            <td><?=$value->getActivo();?></td>
            <td>
            <a class='borrar' href='deleteUsuario.php?email=<?= $value->getEmail() ?>'>Borrar</a>
            </td>
            
         </tr>
            
       
        <?php  }}
        
        
       else{echo 'error de permisos, no tiene permiso para acceder a estos datos';}} ?>
        </table>
       </div>
        
        </div>
    </body>
</html>
