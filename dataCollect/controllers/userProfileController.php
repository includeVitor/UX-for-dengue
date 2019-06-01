<?php

class userProfileController extends controller{

    
    public function index(){
        $dados = array();
        $this->loadTemplate('profiles/user', $dados); 
    }

}