<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - WebProgram Development</title>
  
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
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require('nav.php');
    ?>
    <div class="container">
        <div class="col-12" style="height: 30px;"></div>
        <div class="row justify-content-around align-items-center">	       	
            <div class="col-sm-5 col-sm-offset-5 login-usuario" style="padding: 50px;">
                <h3 class="text-center" style="color: #fff;">Entrar</h3>	
                <hr>
                <form name="form-usuario" method="post" action="valida_usuario.php" >		
                    <div class="form-group">
                        <label class="lbl-form" for="email">E-mail</label>
                        <input type="email" name="txtemail" class="form-control campo-login" required placeholder = "Digite seu e-mail">
                    </div>		
                    <div class="form-group">
                        <label class="lbl-form" for="email">Senha</label>
                        <input type="password" name="txtsenha" class="form-control campo-login" required id="senha" placeholder = "Digite sua senha">
                    </div>	
                    <br>

                        <button type="submit" class="btn btn-md w-100 btn-primary btn-login">					
                            <span class="glyphicon glyphicon-ok"> Entrar</span>					
                        </button>
                        
                        <br><br>
                    <a href="cadastro.php">
                        <button type="button" class="btn btn-md w-100 btn-primary btn-login">					
                            <span class="glyphicon glyphicon-ok"> Cadastrar</span>					
                        </button>
                    </a>
                </form>	
			</div>
        </div>
    </div>
    <?php
        require('footer.html');
    ?>
</body>
</html>