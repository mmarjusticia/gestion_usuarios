<?php


class QueryString {
   private $params;

    function __construct() {
	$this->params=$_GET; //mis parametros son todos los que me llegan

    }

    function get($nombre) { //le pasamos el nombre del parametro que me está llegando y me devuelve el valor
        return $this->params[$nombre];
    }

    

    function getParamsWithout($parametrosDelete){
        return $this->getParams(array(),$parametrosDelete);
      
    }

    function getParams($parametrosAdd = array(), $parametrosDelete = array()) {//le paso dos arrays, uno con los parametros que quiero añadirle y otro con los q quieres q quite. devuelve la cadena con los parametros añadidodsy quitados
        $copia=$this->params;
        foreach ($parametrosDelete as $parametro=> $valor) {
            unset($copia[$parametro]);
                      
        }
        foreach ($parametrosAdd as $parametro => $valor) {
           $copia[$parametro]=$valor;
        }
        $r="";
        foreach ($copia as $parametro => $value) {
           $r.=$parametro."=".urlencode($value)."&";
            
        }
        
        return substr($r, 0,-1);
    }

    function set($nombre, $valor) { //añade un parametro
        $this->params[$nombre]=$valor;
    }

    function delete($nombre) { //borra elementos
        $this->params[$nombre]=null;
    }

    function __toString() { //devuelve el string de los parámetros (sin la interrogacion, concatenado con los &)
      $r='';
        foreach ($this as $indice => $valor) {
            $r.="$indice=$valor.'&'";
            
        }
        $r=  substr($r, 0, strlen($r)-1);
                return $r;
    }
    

}
