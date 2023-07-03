<?php
namespace App\Controllers;


class NotFoundController{
    public function index(){

        throw new \Exception("Pagina solicitada não encontrada");

    }
}