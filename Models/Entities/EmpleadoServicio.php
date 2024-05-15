<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class EmpleadoServicio extends ActiveRecord\Model{
    static $has_many = array(
        array('cargo')
    );
}