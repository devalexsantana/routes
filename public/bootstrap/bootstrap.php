<?php
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

/*const TEXT_PARAMS_IN_ROUTE = '{params}';

var_dump(getParamsInUri('user/edit/4'));

function getParamsInUri($route): array
{
  if (is_string($route)) {

    $explodeurl = array_filter(explode('/', $route));

    $paramsPosition = array_search(TEXT_PARAMS_IN_ROUTE, $explodeurl);

    $params = array_filter(explode('/', $_SERVER['REQUEST_URI']));

    return $params;//[$params[$paramsPosition]];
  }

  return [$params = null];
}*/



