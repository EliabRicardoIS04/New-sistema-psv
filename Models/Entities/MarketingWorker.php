<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class MarketingWorker extends ActiveRecord\Model{
    
    static $has_many = array(
        array('Advertisement')
    );
}