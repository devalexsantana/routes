<?php

namespace App\Library;

use App\Library\Controller;
use App\Library\Route;

class Router
{

    

    private array $routes = [];

    public function add(String $route, String $request, String $controller)
    {  
         
        if($_SERVER['REQUEST_URI'] == '/'){
            $params = null;
            $this->routes[] = new Route($route, $request, $controller,$params);
        }else{
            $params = Parameters::getParamsInUri($route);
            $route = Parameters::TransformRouteToCurrentUri($route); 
            $this->routes[] = new Route($route, $request, $controller, $params);

        }
      
      
    }


    public function init()
    {

        foreach ($this->routes as $route) {
            if ($route->match($route)) {
               return(new Controller)->call($route);               
            }

       
           
        }

        return (new Controller)->call(new Route('/404', 'GET', 'NotFoundController@index', ''));      
        
    }
}
