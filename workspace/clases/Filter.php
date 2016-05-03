
    <?php
class Filter {
    
    static function isEmail($valor){
        return filter_var($valor, FILTER_VALIDATE_EMAIL);
    }
    
    static function isNumber($valor){
        filter_var($valor, FILTER_VALIDATE_INT);
    }
    
    
    static function isFloat($valor){
        filter_var($valor, FILTER_VALIDATE_FLOAT);
    }
    
    
    static function isIp($valor){
        filter_var($valor, FILTER_VALIDATE_IP);
    }
    
    static function isUrl($valor){
        filter_var($valor, FILTER_VALIDATE_URL);
    }
    
    static function isMinLength($valor, $longitud){
        return strlen($valor) >= $longitud;
    }
    
    static function isLogin($valor){
       /*  if(preg_match('/^[A-Za-z][A-Za-z0-9]{5,9}$/', $valor));{
             return true;
         }
         return false;*/
         return preg_match('/^[A-Za-z][A-Za-z0-9]{5,9}$/', $valor);
    }
    
    
    static function isRequired($dato, $requerido){
        if($dato==null||$dato==""){
            return false;
        }    
    }
    
    static function isCorrectType($dato,$tipoDato){
       return gettype($dato)==$tipoDato;
        //if(gettype($dato)!=$tipoDato)
            //return false;    
    }
    
   static function isMaxLength($valor, $longitud){
        return strlen($valor)<= $longitud;
    }
    
   static function isCorrectLength($valor,$longitud){
          return strlen($valor)==$longitud;
      }
   
   static function isFormat($dato,$tipo){
          if($tipo=="email"){
                return Filter::isEmail($dato);
      } 
      else{
            if($tipo=="url"){
                return Filter::isUrl($dato);
            }
}}

   static function isCorrect($dato, $requerido, $tipo,$longitudMin=null, $longitudMax=null,$formato){
       if($requerido==true){
           return Filter::isRequired($dato, $requerido);
       }
       
       if(!Filter::isCorrectType($dato, $tipo)){
           return false;
       }
       if(longitudMin!=null){
           if(!Filter::isMinLength($valor, strlen($dato))){
               return false;
           }
       }
       if(longitudMax!=null){
           if(!Filter::isMaxLength($valor, strlen($dato))){
               return false;
           }
       }
       
       if(!Filter::isFormat($dato, $formato)){
           return false;
       
   }



            }
}
