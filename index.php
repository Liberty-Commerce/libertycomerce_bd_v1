<?php 
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    
    define('URL', $_SERVER['REQUEST_URI']);
    define('METHOD', $_SERVER['REQUEST_METHOD']);

    require 'config/DataBase.php';
    require 'routes/route.php';