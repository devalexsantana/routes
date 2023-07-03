<?php

namespace App\Library;

class Parameters
{


  private const  TEXT_PARAMS_IN_ROUTE = '{params}';


  private static function getUrl()
  {

    return rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  }




  public static function TransformRouteToCurrentUri($route)
  {   
   
    if(preg_match(self::TEXT_PARAMS_IN_ROUTE, $route)){
      
      $explodeUrl = array_filter(explode('/', self::getUrl()));
      $explodeRoute = array_filter(explode('/', $route));

      $paramsPositionInRoute = array_search(self::TEXT_PARAMS_IN_ROUTE, $explodeRoute);

      $params = ($explodeUrl[$paramsPositionInRoute] == null ) ? '/': $explodeUrl[$paramsPositionInRoute]; 

      
      $route = str_replace(self::TEXT_PARAMS_IN_ROUTE, $params, $route);
    
      return $route;
    }

    return $route;
  
  }


  public static function getParamsInUri($route): array
  {
    if (preg_match(self::TEXT_PARAMS_IN_ROUTE, $route)) {

      $explodeurl = array_filter(explode('/', $route));

      $paramsPosition = array_search(self::TEXT_PARAMS_IN_ROUTE, $explodeurl);

      $params = explode('/', self::getUrl());

      return [$params[$paramsPosition]];
    }

    return [$params = null];
  }
}
