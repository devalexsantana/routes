<?php

namespace App\Library;

use App\Library\Route;

class Controller
{

    public function call(Route $route)
    {
        $controller = $route->controller;
       
        if (!str_contains($controller, '@')) {
            throw new \Exception("Semi colon need to controller {$controller} in route ");
        }

        [$controller, $action] = explode('@', $controller);

        $controllerInstance = "App\\Controllers\\" . $controller;

        if (!class_exists($controllerInstance)) {
            throw new \Exception("Controller {$controller} does not exist ");
        }

        $controller = new $controllerInstance;

        if(!method_exists($controller, $action)){
            throw new \Exception("Method {$action} does not exist ");

        }


        //definintod parametros
        //$params = Parameters::getParamsInUri($route->route);
          //call_user_func_array([$controller, $action],[]);
        
          
        $controller->$action($route->params);
        

        

        

    }
}
