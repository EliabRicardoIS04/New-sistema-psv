<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class Persona extends ActiveRecord\Model {
    static $has_one = array(
<<<<<<< HEAD
        array('administradorsitio','marketingworker','empleadosservicio','cliente')
=======
        array('administradorsitio','marketingworker','empleadosservicio')
>>>>>>> master
    );
    
    
}



