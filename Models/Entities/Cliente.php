<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class Cliente extends ActiveRecord\Model{

    static $belongs_to = array(
        array('persona')
    );


    static $has_many = array(
        array('carritos','facturas')
    );
}