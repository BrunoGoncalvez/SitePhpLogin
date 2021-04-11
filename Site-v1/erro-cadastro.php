<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - WebProgram Development</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png">

    <!-- FontAwesome-->
    <script src="https://kit.fontawesome.com/05bbd2c08b.js" crossorigin="anonymous"></script>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- JQuery Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="scripts/jquery.mask.js"></script>
    <script>       
        $(document).ready(function(){
            $("#cep").mask("00000-000");
        });	
    </script>
</head>

<body>
    <?php
        include 'conexao.php';
        require('nav.php');
    ?>
    <div class="container">
        
        <div class="col-12" style="height: 50px;"></div>
        <div class="row justify-content-around align-items-center">
            <div class="col-3"></div>
                <div class="col-6">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading text-center">E-mail Inválido</h4>
                        <hr>
                        <p class="text-center">O email digitado já foi cadastrado.</p>
                        <p class="mb-0 text-center"> Tente novamente com um e-mail valido</p>
                        <br>
                    </div>		
                </div>
            <div class="col-3"></div>                      
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="text-center">
                    <a href="index.php">
                        <button type="button" class="btn btn-info">					
                            <span> Home </span>					
                        </button>
                    </a>   
                    <a href="cadastro.php">
                        <button type="button" class="btn btn-info">					
                            <span> Tentar Novamente </span>					
                        </button>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-12" style="height: 60px;"></div>
    </div>

    
    <?php
        require('footer.html');
    ?>
</body>

</html>