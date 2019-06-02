<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://192.168.15.4:8080/UX-for-dengue/dataCollect/");
    $config['dbname'] = '';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = '';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

//global $db;
/*
try{
    $db = new PDO("mysql:dbname=$config[dbname];host=$config[host]",$config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
    exit;
}
*/