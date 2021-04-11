<?php
    $server = "localhost";
    $user = "root";
    $password =  "";
    $database = "wp_php";

    try{
        $cn = new PDO("mysql:host=$server; dbname=$database", $user, $password);
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }    
?>