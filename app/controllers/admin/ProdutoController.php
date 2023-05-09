<?php

namespace app\controllers\admin;

use app\controllers\ContainerController;

class ProdutoController extends ContainerController{


    public function index(){

    }
    
    public function show($request){

       $this->view([

        'title' => 'Produto',
        
        'racao' => 'Pedigree 10KG',

       ],'admin.produtos');

    }

    public function create(){

    }

    public function store(){

    }

    public function edit($id){

    }

}