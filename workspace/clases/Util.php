<?php
class Util {
    static function getSelect($name,$parametros,$valorSeleccionado=null,$blanco=true,$atributos="",$id=null){
        if($id!=null){
        $id="id='$id'";}
        else{
            $id="";
        }
        $r="<select name='$name' $id $atributos>\n";
        if($blanco===true){
        $r.="<option value=''>&nbsp</optiopn>\n" ; 
        }
        foreach ($parametros as $indice => $valor){ 
            $selected="";
            if($valorSeleccionado!==null&&$indice==$valorSeleccionado){
                $selected="selected";
            }
            //<option value='c'>d</option>
           $r.="<option $selected value=$indice>$valor</option>\n";
            
        }
        $r.="</select>\n";
        return $r;
        
        
    }
}
