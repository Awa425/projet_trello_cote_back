<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."constantes.php";
    require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."orm.php";
    require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."router.php";
