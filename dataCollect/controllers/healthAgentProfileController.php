<?php

class healthAgentProfileController extends controller{

    
    public function index(){
        $dados = array();
        $this->loadTemplate('profiles/healthAgent', $dados); 
    }

}