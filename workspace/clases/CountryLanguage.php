<?php

class CountryLanguage {
  private $CountryCode, $Language, $IsOfficial, $Percentage;
  function __construct($CountryCode=null, $Language=null, $IsOfficial=null, $Percentage=null) {
      $this->CountryCode = $CountryCode;
      $this->Language = $Language;
      $this->IsOfficial = $IsOfficial;
      $this->Percentage = $Percentage;
  }
  
  function getCountryCode() {
      return $this->CountryCode;
  }

  function getLanguage() {
      return $this->Language;
  }

  function getIsOfficial() {
      return $this->IsOfficial;
  }

  function getPercentage() {
      return $this->Percentage;
  }

  function setCountryCode($CountryCode) {
      $this->CountryCode = $CountryCode;
  }

  function setLanguage($Language) {
      $this->Language = $Language;
  }

  function setIsOfficial($IsOfficial) {
      $this->IsOfficial = $IsOfficial;
  }

  function setPercentage($Percentage) {
      $this->Percentage = $Percentage;
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
            $this->$indice=$valores[i+$inicio];
            $i++;
        }
    }
}
