<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class AdministradorSitio extends ActiveRecord\Model {
    static $belongs_to = array(
        array('persona')
    );
}

