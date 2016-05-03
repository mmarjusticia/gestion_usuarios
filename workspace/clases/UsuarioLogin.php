<?php



class UsuarioLogin {
    private $nombre, $apellidos,$login, $alias, $clave, $sexo, $correo, $fechaNac, $administrador, $worker, $activo, $fechaAlta,$ip;
    
    function __construct($nombre=null, $apellidos=null, $login=null, $alias=null, $clave=null, $sexo=null, $correo=null, $fechaNac=null, $administrador=false, $worker=false, $activo=false, $fechaAlta=null,$ip=null) {
        $this->nombre = $nombre;//40
        $this->apellidos = $apellidos;//80
        $this->login = $login;//40
        $this->alias = $alias;//40
        $this->clave = $clave;//5-20
        $this->sexo = $sexo;//m,f
        $this->correo = $correo;//100
        $this->fechaNac = $fechaNac;//yyyy-mm-dd
        $this->administrador = $administrador;//true,false
        $this->worker = $worker;//true,false
        $this->activo = $activo;//true,false
        $this->fechaAlta=$fechaAlta;
        $this->ip=$ip;//ip-->no hay que validarla porque la he generado yo aquí ya.
    }
    function getFechaAlta() {
        return $this->fechaAlta;
    }

    function getIp() {
        return $this->ip;
    }

    function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }

    function setIp($ip) {
        $this->ip = $ip;
    }

        function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getLogin() {
        return $this->login;
    }

    function getAlias() {
        return $this->alias;
    }

    function getClave() {
        return $this->clave;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getFechaNac() {
        return $this->fechaNac;
    }

    function getAdministrador() {
        return $this->administrador;
    }

    function getWorker() {
        return $this->worker;
    }

    function getActivo() {
        return $this->activo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setAlias($alias) {
        $this->alias = $alias;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    function setAdministrador($administrador) {
        $this->administrador = $administrador;
    }

    function setWorker($worker) {
        $this->worker = $worker;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }


    static function LoginAliasPorDefecto($correo) {
    $cadena=""; 
    $i=0;
    while(substr($correo, $i, 1)!='@'){
          $cadena= substr($correo, $i, 1);
          $i++;
        }
    return $cadena;}
    
    
}

