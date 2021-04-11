<?php

    include 'conexao.php';

    $id = 0;
    $update = false;
    $nome = '';
    $telefone = '';
    $estado = '';  

    if(isset($_POST['save'])){
        $name = $_POST['nome-cliente'];
        $telcliente = $_POST['tel-cliente'];
        $estado = $_POST['estado-cliente'];

        
        try{
            $cn->query("INSERT INTO clientes (nome_cliente,tel_cliente,estado_cliente) values ('$name', '$telcliente', '$estado');");
        }catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
        }  
        
        header('location:admin.php');  
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $cn->query("DELETE FROM clientes WHERE id_cliente=$id;");

        header('location:admin.php');
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;

        $res = $cn->query("SELECT * FROM clientes WHERE id_cliente=$id;");
        if($res->rowCount() == 1){
            $row = $res->fetch(PDO::FETCH_ASSOC);

            $nome = $row['nome_cliente'];
            $telefone = $row['tel_cliente'];
            $estado = $row['estado_cliente'];

        }

    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['nome-cliente'];
        $telcliente = $_POST['tel-cliente'];
        $estado = $_POST['estado-cliente'];

        $cn->query("UPDATE clientes SET nome_cliente = '$name', tel_cliente = '$telcliente', estado_cliente = '$estado' WHERE id_cliente=$id;");

        header('location:admin.php');
    }
    