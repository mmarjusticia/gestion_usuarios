<?php

class Pager {
 
    private $registros, $rpp=Constants::NRPF, $paginaActual=1;
    function __construct($registros=null, $rpp=null, $paginaActual=1) {
        if($rpp===null){
            $rpp=  Constants::NRPF;
        }
        if($paginaActual===null){
            $paginaActual=1;
        }
        $this->registros = $registros;
        $this->rpp = $rpp;
        $this->paginaActual = $paginaActual;
    }
    function getRegistros() {
        return $this->registros;
    }

    function getRpp() {
        return $this->rpp;
    }

    function getPaginaActual() {
        return $this->paginaActual;
    }

    function setRegistros($registros) {
        $this->registros = $registros;
    }

    function setRpp($rpp) {
        $this->rpp = $rpp;
    }

    function setPaginaActual($paginaActual) {
        $this->paginaActual = $paginaActual;
    }

function getPrimera(){
  return 1;

    }

    function getAnterior(){
        return max(1,$this->getPaginaActual()-1);

    }

    function getSelect($id, $name = null){//tiene que construir el select, es decir elegir que rpp quiero ver.
            if($name===null){
                $name=$id;
            }
            $array=array(10=>"10 rpp", 50=>"50 rpp", 100=>"100 rpp");
            return Util::getSelect($name, $array, $this->rpp, false, "",$id);
    }

    function getSiguiente(){//devuelve la pagina siguiente a la actual
        return min($this->getPaginas(),$this->paginaActual+1);
//        return $this->paginaActual+1;
    }

    function getPaginas(){//me devuelve la ultima página que tengo
        $registros=$this->registros;
        $rpp=$this->rpp;
        return ceil($registros/$rpp);
        
    }

}
