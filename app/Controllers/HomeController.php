<?php

namespace App\Controllers;

class HomeController{

    public function index(){
        var_dump('Home Controlle - Home');
    }

    public function store($params){
        var_dump('Home Controller - Store '. $params[0]);
    }
    

    public function edit($params){
        var_dump('Home Controller - Edit'. ' '. $params[0]);
    }
}