<?php
    //front controller
define ("DEBUG", 1);

    ini_set('display_errors', DEBUG);
    error_reporting(E_ALL);
    session_start();

    define('ROOT', dirname(__FILE__));
    require_once(ROOT.'/components/Autoload.php');
   

    $router = new   Router();
    $router->run();

?>
