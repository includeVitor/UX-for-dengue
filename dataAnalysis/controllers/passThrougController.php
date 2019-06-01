<?php

class passThrougController extends controller{

    

    public function index(){
        $dados = array();
        $this->loadTemplate('decisions/passThroug', $dados); 
    }

}