<?php
namespace App\Controllers;


class ErrorController{
    public function parameters(){

        throw new \Exception("Parametro solicitado Pela ROUTE e invalido na URL");

    }
}