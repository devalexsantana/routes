<?php

namespace App\Library;



class Route
{

   /**
    * Summary of __construct
    * @param mixed $uriParameters
    * @param mixed $uri
    * @param mixed $request
    * @param mixed $controller
    */
   public function __construct(public $route, private $request, public $controller, public $params)
   {
   
      
     
   }

   /**
    * Summary of currentUri
    * @return string
    */
   private function currentUri()
   {
      return $_SERVER['REQUEST_URI'] != '/' ? rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') : '/';
   } 


   /**
    * Summary of currentRequest
    * @return string
    */
   private function currentRequest()
   {
      return strtolower($_SERVER['REQUEST_METHOD']);
   }


   /**
    * Summary of match
    * @return Route
    */
   public function match()
   {
      if ($this->route == $this->currentUri() && strtolower($this->request) == $this->currentRequest()) {
         return $this;
      }    
   }
}
