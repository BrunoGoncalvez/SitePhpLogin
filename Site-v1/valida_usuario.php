<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - WebProgram Development</title>
  
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- FontAwesome-->
        <script src="https://kit.fontawesome.com/05bbd2c08b.js" crossorigin="anonymous"></script>
        
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        <!-- JQuery Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
    <body>
        <?php
            require('nav.php');
            include 'conexao.php';

            $Vemail = $_POST['txtemail'];
            $Vsenha = $_POST['txtsenha'];

            $consulta = $cn->query("SELECT ID_Usuario,Nome_usuario,Email_usuario,Senha_usuario, status_usuario from usuario where Email_usuario = '$Vemail' and  Senha_usuario ='$Vsenha';");

            if($consulta->rowCount()== 1){
                $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
                if($exibeUsuario['status_usuario'] == 0){
                    $_SESSION['ID'] = $exibeUsuario['ID_Usuario'];
                    $_SESSION['STATUS'] = $exibeUsuario['status_usuario'];
                    header('location:index.php');
                }
                else{
                    $_SESSION['ID'] = 1;
                    $_SESSION['STATUS'] = $exibeUsuario['status_usuario'];
                    header('location:index.php');
                }
            }
            else{
                header('location:erro.php');
            }    
            
        ?>

        <?php
            require('footer.html');
        ?>
    </body>
</html>