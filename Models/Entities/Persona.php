<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class Persona extends ActiveRecord\Model {
    static $has_one = array(
        array('administradorsitio','marketingworker','empleadosservicio','cliente')
    );
    

    public function getContrasena() {
        return $this->contrasena;
    }
    

   
}



