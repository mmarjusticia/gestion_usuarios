<?php
//es una clase pojo
class City {
    private $ID; 
    private $Name;
    private $CountryCode;
    private $District;
    private $Population;
    
    //tiene que tener: 
    //1º Constructor->null
    //2ª getter and setter
    //3ª get json
    //4ªset generico

    function __construct($ID=null, $Name=null, $CountryCode=null, $District=null, $Population=null) {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->CountryCode = $CountryCode;
        $this->District = $District;
        $this->Population = $Population;
    }

    function getID() {
        return $this->ID;
    }

    function getName() {
        return $this->Name;
    }

    function getCountryCode() {
        return $this->CountryCode;
    }

    function getDistrict() {
        return $this->District;
    }

    function getPopulation() {
        return $this->Population;
    }

    function setID($ID) {
        $this->ID = $ID;
    }

    function setName($Name) {
        $this->Name = $Name;
    }

    function setCountryCode($CountryCode) {
        $this->CountryCode = $CountryCode;
    }

    function setDistrict($District) {
        $this->District = $District;
    }

    function setPopulation($Population) {
        $this->Population = $Population;
    }
//    
//    function getJson
 
    function setOld($valores,$inicio=0){
        $this->ID=$valores[0+$inicio];
        $this->Name=$valores[1+$inicio];
        $this->CountryCode=$valores[2+$inicio];
        $this->District=$valores[3+$inicio];
        $this->Population=$valores[4+$inicio];
    }
       public function getJSon() {
        $cadena="{";
        foreach ($this as $clave => $valor) {
            $cadena=' '.$cadena.' "'.$clave.'":"'.$valor.'",';
        }
        $cadena=  substr($cadena,0, -1);
        $cadena=$cadena.'}';
        return $cadena;
    }
    
    function set($valores,$inicio=0){
        $i=0;
        foreach($this as $indice=>$valor){//mete en la variable de instancia los valores que le llegan. Rellena los campos.
            $this->$indice=$valores[$i+$inicio];
            $i++;
        }
    }
    public function __toString() {
        $r='';
        foreach ($this as $key => $value) {
            $r.=$value;
            
        }
                return $r;
    }

}
