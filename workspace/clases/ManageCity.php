<?php

class ManageCity {
    
    private $bd=null;
    private $tabla="city";
    
    function __construct(DataBase $bd) {
        $this->bd=$bd;
    }
    
    function count($condicion="1=1",$parametros=array()){
        return $this->bd->count($this->tabla,$condicion,$parametros);
        
    }
    
    //Obtiene ciudad a través de su ID
    function get ($ID){
        $parametros=array();
        $parametros["ID"]=$ID;
        $this->bd->select($this->tabla,'*','id=:ID',$parametros);
        $fila=  $this->bd->getRow();
        $city = new City();
        $city->set($fila);
        return $city;
    }
    
    //Borra la ciudad a la que corresponde el ID que le pasamos, devuelve número de líneas afectadas
    function delete($ID){
        $parametros=array();
        $parametros["ID"]=$ID;
        return $this->bd->delete($this->tabla,$parametros);
    }
    
    //Borra la ciudad que se le pasa y devuelve el número de filas afectadas
    function erase(City $city){
        return $this->delete($city->getID());
    }
    
    //Se le pasa Ciudad para insertar y cuando la inserta devuelve el ID
    function insert(City $city){
        $parametrosSet=  array();
        $parametrosSet['$Name']=$city->getName();
        $parametrosSet['CountryCode']=$city->CountryCode();
        $parametrosSet['District']=$city->getDistrict();
        $parametrosSet['Population']=$city->getPopulation();
        return $this->bd->insert($this->tabla,$parametrosSet);
    }
    
    //
    function set(City $city){
        $parametrosSet=  array();
        $parametrosSet['$Name']=$city->getName();
        $parametrosSet['CountryCode']=$city->getCountryCode();
        $parametrosSet['District']=$city->getDistrict();
        $parametrosSet['Population']=$city->getPopulation();
        $parametrosWhere= array();
        $parametrosWhere['ID']=$city->getID();
        $this->bd->update($this->tabla,$parametrosSet,$parametrosWhere);
    }
    
    function getList($pagina=1,$nrpp=Constants::NRPF){
//        if($nrpp==null){
//            $nrpp=  Constants::NRPF;
//        }
        $registroInicial=($pagina-1)*$nrpp;
        $this->bd->select($this->tabla,"*","1=1",array(),"Name,CountryCode","$registroInicial,".$nrpp);
      
        $r=array();
        while($fila=  $this->bd->getRow()){
            $city=new City();
            $city->set($fila);
            $r[]=$city;
        }
        return $r;
    }
    
        function getValuesSelect(){
        $this->bd->query($this->tabla,"ID,Name",array(),"Name");
        $array=array();
        while($fila=$this->bd->getRow()){
            $array[$fila[0]]=$fila[1];
        }
       return $array; 
    }
    
}

