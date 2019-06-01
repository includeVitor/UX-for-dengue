<?php

class specialistValidationController extends controller{

    
    public function index(){
        $dados = array();
        $this->loadTemplate('decisions/specialistValidation', $dados); 
    }

}