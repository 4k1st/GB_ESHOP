<?php
class DB{
    public static function getConnection(){
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);
        
        //$mysqli = new mysqli("$params['host']", "$params['user']", "$params['passwd']", "dbname={$params['dbname']}");
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
        $db = new PDO($dsn, $params['user'],$params['passwd'], $opt);
        
        $db->exec("set names utf8");
        return $db;
    }
}
?>
