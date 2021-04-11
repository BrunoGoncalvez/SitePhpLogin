<?php
    include 'conexao.php';

    $nome = $_POST['txtnome'];
    $email =  $_POST['txtemail'];
    $senha = $_POST['txtsenha'];
    $end = $_POST['txtendereco'];
    $complemento = $_POST['txtcomplemento']; 
    $estado = $_POST['txtestado']; 
    $cep = $_POST['txtcep'];


    $consulta = $cn->query("SELECT Email_usuario from usuario where Email_usuario = '$email'; ");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    
    if($consulta->rowCount() == 1){
        header('Location:erro-cadastro.php');
    }
    else{

        try{
            $inserir = $cn->query(" INSERT INTO usuario(Nome_usuario, Email_usuario, Senha_usuario, status_usuario, Endereco_usuario, Complem_usuario , Estado_usuario, Cep_usuario)
             values ('$nome', '$email', '$senha',0, '$end', '$complemento', '$estado', '$cep');");
        }catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
        }

        header('Location:cadastro-ok.php');
    }

?>



















