<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();
$registro=Request::get('registro');

$admin=$gestor->get('jluislechado@gmail.com');
//echo 'esto devuelve'.$admin;
if($admin==""){
    echo 'por aqui pasa';
   $correo='jluislechado@gmail.com';
   $alias='admin';
   $fechaAlta=date('Y-m-d');
   $clave='admin';
   $claveCifrada=sha1($clave.Constant::SEMILLA);
   
   
$administrador= new Usuario($correo,$claveCifrada,$alias,$fechaAlta,1,1,0);
$gestor->insert($administrador);
$usuario=$gestor->get($correo);
$em=$usuario->getEmail();
    echo 'recuperando el usuario'.$em;
}
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
            <?php
            if($registro==='si'){?>
                <span>Se ha registrado con exito. Ya puede proceder a entrar</span><?php
    
}
?>
              <div id="zonaRegistro">
                    <span class="titulo">¿Eres nuevo?</span></br>
                    <div id="registro"><a href="altaUsuario.php">Registrate</a></div>
                </div>
              
                
                <div id="zonaUsuarioN">
                    <div class="titulo">Entrar</div>
                    <div class="titulin"></div>
                  <form  name="login" action="phpentrar.php" method="POST">
                  <div id="etiqueta">
                    <div class="datos" id="usuario">
                        <span>Usuario:&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input id="us" type="text" name="user" value="" placeholder="Usuario:"/>
                    </div>
                    <div class="datos" id="contrasena">
                        <span>Password:</span>
                        <input id="cont" type="password" name="password" value="" placeholder="Password:"/>
                    </div>
                    <input type="hidden" name='bandera' value="usuario"/>
                    <div id="enviar">
                    <input type="submit" value="Login" name="login" id="send"/>
                    </div>
                  </div>
                </form>
               <div class="enlace"> <a class="datos" href="recuperarClave.php">¿Olvidaste tu contraseña?</a> </div>  
                </div>
                <div class="relleno"></div>
             
               
                
                <div id="zonAdministrador"/>
        <div class="titulo">Zona Administrador</div>
          <form  name="login" action="phplogin.php" method="POST">
                  <div id="etiqueta">
                    <div id="usuario" class="datos">
                        <span>Usuario:</span>
                        <input id="us" type="text" name="user" value="" placeholder="Usuario:"/>
                    </div>
                    <div id="contrasena" class="datos">
                        <span>Password:</span>
                        <input id="cont" type="password" name="password" value="" placeholder="Password:"/>
                        <input type="hidden" name='bandera' value="administrador"/>
                    </div>
                    <div id="enviar">
                    <input type="submit" value="Login" name="login" id="send"/>
                    </div>
                  </div>
                </form>
                
                <div class="enlace"><a class="datos" href="recuperarClave.php">¿Olvidaste tu contraseña?</a></div>
                </div>
        </div>
    </body>
</html>