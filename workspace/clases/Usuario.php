<?php

class Usuario {

    private $email, $clave, $alias, $fechaAlta, $activo, $administrador, $personal;

    function __construct($email=null, $clave=null, $alias=null, $fechaAlta=null, $activo=null, $administrador=null, $personal=null) {
        $this->email = $email;
        $this->clave = $clave;
        $this->alias = $alias;
        $this->fechaAlta = $fechaAlta;
        $this->activo = $activo;
        $this->administrador = $administrador;
        $this->personal = $personal;
    }

    function getEmail() {
        return $this->email;
    }

    function getClave() {
        return $this->clave;
    }

    function getAlias() {
        return $this->alias;
    }

    function getFechaAlta() {
        return $this->fechaAlta;
    }

    function getActivo() {
        return $this->activo;
    }

    function getAdministrador() {
        return $this->administrador;
    }

    function getPersonal() {
        return $this->personal;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }


    function setAlias($alias) {
        $this->alias = $alias;
    }

    function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setAdministrador($administrador) {
        $this->administrador = $administrador;
    }

    function setPersonal($personal) {
        $this->personal = $personal;
    }

    public function __toString2() {
        return  "email: " . $this->email . " </br>" .
                "clave: " . $this->clave1 . " </br>" .
                "Alias: " . $this->alias . "</br> " .
                "fecha de alta: " . $this->fechaAlta . " </br>" .
                "es administrador?: " . $this->administrador . " </br>" .
                "es personal?: " . $this->personal . " </br>" .
                "está activo?: " . $this->activo . " </br>" ;
                
    }
          public function __toString() {
        $r='';
        foreach ($this as $key => $value) {
            $r.=$value;
            
        }
                return $r;
    }
        function set($valores, $inicio = 0) {
        $i = 0;
        foreach ($this as $indice => $valor) {//mete en la variable de instancia los valores que le llegan. Rellena los campos.
            $this->$indice = $valores[$i + $inicio];
            $i++;
        }
    }
       public function getJSon() {
        $cadena = "{";
        foreach ($this as $clave => $valor) {
            $cadena = ' ' . $cadena . ' "' . $clave . '":"' . $valor . '",';
        }
        $cadena = substr($cadena, 0, -1);
        $cadena = $cadena . '}';
        return $cadena;
    }
      public function read(){//lee de la interfaz todos los nombres q coincidan con los nombres de la clase
        foreach ($this as $key=>$valor){
            $this->$key=  Request::req($key);
        }
    }
        public function getArray($valores=true){//devuelve un array con un idicide los parametros y como valor los l¡valores de los parametros.
                                            //te da un get con todos los valores
        $array=array();
        foreach( $this as $key => $value) {
            if($valores==true){
            $array[key]=$valor;}
            else{
                $array[$key]=null;
            }
        }
        return $array;
    }

}

