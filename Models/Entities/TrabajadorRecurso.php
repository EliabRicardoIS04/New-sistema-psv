<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class TrabajadorRecurso extends ActiveRecord\Model{
    static $belongs_to = array(
        array('persona')
    );
}