<?php

class ManageUsuario {
 private $bd = null;
    private $tabla = "usuario";

    function __construct(DataBase $bd) {
        $this->bd = $bd;
    }
    function get($email) {//pasandole el email convierto una fila de mi tabla en un objeto usuario
        $parametros['email'] = $email;
        $this->bd->select($this->tabla, "*", "email=:email", $parametros);
        $fila = $this->bd->getRow();
        $user = new Usuario();
        $user->set($fila);
        //echo 'llamando al metodo';
        return $user;
}
    function getPorAlias($alias) {//pasandole el alias convierto una fila de mi tabla en un objeto usuario
        $parametros['alias'] = $alias;
        $this->bd->select($this->tabla, "*", "alias=:alias", $parametros);
        $fila = $this->bd->getRow();
        $usuario = new Usuario();
        $usuario->set($fila);
        //echo 'ha entrado';
        return $usuario;
}
 function getListWhere($condicion,$pagina=1, $nrpp=Constant::NRPF){
         $registroInicial = ($pagina-1)*$nrpp;
         $this->bd->select($this->tabla, "*", $condicion, array(), "email, alias","", $registroInicial, $nrpp);
         $r=array();
         while($fila =$this->bd->getRow()){
             $usuario = new Usuario();
             $usuario->set($fila);
             $r[]=$usuario;
         }
         return $r;
    }
    
      function getListOrder($orden='email',$criterio='asc',$pagina=1, $nrpp=Constant::NRPP){
         $registroInicial = ($pagina-1)*$nrpp;
         $this->bd->select2($this->tabla, "*", "1=1", array(), $orden,$criterio,"" ,$registroInicial, $nrpp);
         $r=array();
         while($fila =$this->bd->getRow()){
             $usuario = new Usuario();
             $usuario->set($fila);
             $r[]=$usuario;
         }
         return $r;
    }
        function getListProyeccion($proyeccion,$orden,$criterio,$pagina=1, $nrpp=Constant::NRPP){
         $registroInicial = ($pagina-1)*$nrpp;
         $this->bd->select($this->tabla, $proyeccion, "1=1", array(), $orden,$criterio, "$registroInicial, $nrpp");
         $r=array();
         while($fila =$this->bd->getRow()){
             $usuario = new Usuario();
             $usuario->set($fila);
             $r[]=$usuario;
         }
         return $r;
    }
            function getList($proyeccion='*',$orden='email',$criterio='1', $pagina=1, $nrpp=Constant::NRPF){
         $registroInicial = ($pagina-1)*$nrpp;
         $this->bd->select($this->tabla, $proyeccion, "1=1", array(), $orden, $criterio, "$registroInicial, $nrpp");
         $r=array();
         while($fila =$this->bd->getRow()){
             $usuario = new Usuario();
             $usuario->set($fila);
             $r[]=$usuario;
         }
         return $r;
    }
     function delete($email) {
        $parametros = array();
        $parametros['email'] = $email;
        return $this->bd->delete($this->tabla, $parametros);
    }

function deleteUsuarios($parametros) {
        return $this->bd->delete($this->tabla, $parametros);
    }
      function set(Usuario $usuario) {
         
        $parametrosSet = array();
        $parametrosSet['email'] = $usuario->getEmail();
        $parametrosSet['clave'] = $usuario->getClave();
        $parametrosSet['alias']=$usuario->getAlias();
        $parametrosSet['fechaAlta']=$usuario->getFechaAlta();
        $parametrosSet['activo']=$usuario->getActivo();
        $parametrosSet['administrador']=$usuario->getAdministrador();
        $parametrosSet['personal']=$usuario->getPersonal();
        $parametrosWhere = array();
        $parametrosWhere['email'] = $usuario->getEmail();
        return $this->bd->update($this->tabla, $parametrosSet, $parametrosWhere);
    }
          function set2(Usuario $usuario) {
         
        $parametrosSet = array();
        $parametrosSet['email'] = $usuario->getEmail();
        $parametrosSet['clave'] = $usuario->getClave();
        $parametrosSet['alias']=$usuario->getAlias();
        $parametrosSet['fechaAlta']=$usuario->getFechaAlta();
        $parametrosSet['activo']=$usuario->getActivo();
        $parametrosSet['administrador']=$usuario->getAdministrador();
        $parametrosSet['personal']=$usuario->getPersonal();
        $parametrosWhere = array();
        $parametrosWhere['alias'] = $usuario->getAlias();
        return $this->bd->update($this->tabla, $parametrosSet, $parametrosWhere);
    }
     function insert(Usuario $usuario) {
        //Se pasa un objeto autor y se inserta, se devuelve el id del elemento con el que se ha insertado
        $parametrosSet = array();
       $parametrosSet['email'] = $usuario->getEmail();
        $parametrosSet['clave'] = $usuario->getClave();
        $parametrosSet['alias']=$usuario->getAlias();
        $parametrosSet['fechaAlta']=$usuario->getFechaAlta();
        $parametrosSet['activo']=$usuario->getActivo();
        $parametrosSet['administrador']=$usuario->getAdministrador();
        $parametrosSet['personal']=$usuario->getPersonal();
        return $this->bd->insert($this->tabla, $parametrosSet);
    }
        function getValuesSelect($proyeccion,$orden){
        $this->bd->query($this->tabla, $proyeccion, array(), $orden);
        $array = array();
        while($fila=$this->bd->getRow()){
            $array[$fila[0]] = $fila[0];
        }
        return $array;
    }
    
    function getValuesSelect2($proyeccion,$orden){
        $this->bd->query($this->tabla, $proyeccion, array(), $orden);
        $array = array();
        $i=0;
        while($fila=$this->bd->getRow()){
            $array[$i] = $fila[0];
            $i++;
        }
        return $array;
    }
        function count($condicion="1 = 1", $parametros = array()){
        return $this->bd->count($this->tabla, $condicion, $parametros);
    }
        function getList2($pagina=1, $nrpp=Constant::NRPP){
         $registroInicial = ($pagina-1)*$nrpp;
         $this->bd->select($this->tabla, "*", "1=1", array(), "email, alias", "$registroInicial, $nrpp");
         $r=array();
         while($fila =$this->bd->getRow()){
             $usuario = new Usuario();
             $usuario->set($fila);
             $r[]=$usuario;
         }
         return $r;
    }
}