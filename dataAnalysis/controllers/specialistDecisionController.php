<?php

class specialistDecisionController extends controller{

    
    public function index(){
        $dados = array();
        $this->loadTemplate('decisions/specialistDecision', $dados); 
    }

}