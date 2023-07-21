<?php

use App\Config\DbConfig;
use App\Db\ConnectionDb;
use App\Library\Router;

try{

    $route = new Router;

    $route->add('/', 'GET', 'HomeController@index');
    $route->add('/user/store/{params}', 'GET','HomeController@store');
    $route->add('/user/{params}/edit', 'GET','HomeController@edit');

   
    

    $route->init();
}catch(Exception $e){
    var_dump($e->getMessage().' '.$e->getFile().' '.$e->getLine());
}



$conn = new ConnectionDb();

var_dump($conn->conn());


