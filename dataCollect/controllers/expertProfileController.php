<?php

class expertProfileController extends controller{

    
    public function index(){
        $dados = array();
        $this->loadTemplate('profiles/expert', $dados); 
    }

}