<?php

require "../bootstrap.php";

use core\Controller;


try{

    $controller = new Controller;
    $controller = $controller->load();
    dd($controller);
    
}catch(\Exception $e){

    dd($e->getMessage());
}


