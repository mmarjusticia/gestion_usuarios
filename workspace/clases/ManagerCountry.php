<?php
 
class ManagerCountry {
    private $bd=null;
    private $tabla="country";
    function __construct(DataBase $bd) {
        $this->bd=$bd;
    }
    
    
   
    function delete ($Code){}
    function erase(Country $country){}
    function set(Country $country, $pkCode){}
    function insert(Country $country){
        $parametros=$country->getArray();
        return $this->bd->insert($this->tabla,$parametros,false);
    }
    
    function getValuesSelect(){
        $this->bd->query($this->tabla,"Code,Name",array(),"Name");
        $array=array();
        while($fila=$this->bd->getRow()){
            $array[$fila[0]]=$fila[1];
        }
       return $array; 
    }
     function getList(){
    
        $this->bd->select($this->tabla,"*","1=1",array(),"Name,Continent,Code");
        $r=array();
        while($fila=  $this->bd->getRow()){
            $country=new Country();
            $city->set($fila);
            $r[]=$country;
        }
        return $r;
    }
        function get ($Code){
        $parametros=array();
        $parametros["Code"]=$Code;
        $this->bd->select($this->tabla,'*','Code=:COde',$parametros);
        $fila=  $this->bd->getRow();
        $coutry = new Country();
        $country->set($fila);
        return $country;
    }
    
    


}
