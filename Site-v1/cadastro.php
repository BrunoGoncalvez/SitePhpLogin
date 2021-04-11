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
        <div class="col-12" style="height: 30px;"></div>
        <div class="row justify-content-around align-items-center">
            <div class="col-md-8 col-md-offset-8 cadastro-usuario" style="padding: 60px 50px;">
                <h2 class="text-center" style="color: #fff;">Cadastro</h2>
                <br><br>
                <form action="insert-usuario.php" method="POST"  name="cadastro-usuario">
                    <div class="form-group">
                        <label class="lbl-form">Nome Completo</label>
                        <input name="txtnome" type="text" class="form-control campo-login" required placeholder ="Nome Completo">
                    </div>

                    <div class="form-group">
                        <label class="lbl-form">E-mail</label>
                        <input name="txtemail" type="email" class="form-control campo-login" required id="email" placeholder ="E-mail">
                    </div>

                    <div class="form-group">
                        <label class="lbl-form">Senha</label>
                        <input name="txtsenha" type="password" class="form-control campo-login" required id="senha" placeholder ="Senha">
                    </div>

                    <div class="form-group">
                        <label class="lbl-form">Endereço</label>
                        <input name="txtendereco" type="text" class="form-control campo-login" required id="endereco" placeholder ="Endereço">
                    </div>

                    <div class="form-group">
                        <label class="lbl-form">Complemento</label>
                        <input name="txtcomplemento" type="text" class="form-control campo-login" required id="complemento" placeholder ="Complemento">
                    </div>

                    <div class="form-group">
                        <label class="lbl-form">Estado</label>
                        <select class="form-control campo-login" name="txtestado">
                                <option value = "" disabled selected>Selecionar Estado</option> 
                                <option value="Acre">Acre</option> 
                                <option value="Alagoas">Alagoas</option> 
                                <option value="Amazonas">Amazonas</option> 
                                <option value="Amapá">Amapá</option> 
                                <option value="Bahia">Bahia</option> 
                                <option value="Ceará">Ceará</option> 
                                <option value="Distrito">Distrito Federal</option> 
                                <option value="Espírito Santo">Espírito Santo</option> 
                                <option value="Goiás">Goiás</option> 
                                <option value="Maranhão">Maranhão</option> 
                                <option value="Mato Grosso">Mato Grosso</option> 
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
                                <option value="Minas Gerais">Minas Gerais</option> 
                                <option value="Pará">Pará</option> 
                                <option value="Paraíba">Paraíba</option> 
                                <option value="Paraná">Paraná</option> 
                                <option value="Pernambuco">Pernambuco</option> 
                                <option value="Piauí">Piauí</option> 
                                <option value="Rio de Janeiro">Rio de Janeiro</option> 
                                <option value="Rio Grande do Norte">Rio Grande do Norte</option> 
                                <option value="Rondônia">Rondônia</option> 
                                <option value="Rio Grande do Sul">Rio Grande do Sul</option> 
                                <option value="Roraima">Roraima</option> 
                                <option value="Santa Catarina">Santa Catarina</option> 
                                <option value="Sergipe">Sergipe</option> 
                                <option value="São Paulo">São Paulo</option> 
                                <option value="Tocantins">Tocantins</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="lbl-form">CEP</label>
                        <input name="txtcep" type="text" class="form-control campo-login" required id="cep" placeholder ="CEP">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="">
                                <button type="submit" class="btn btn-md btn-primary w-100 btn-login">
                                    <span> Cadastrar</span>
                                </button>
                            <a>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <a href="login.php">
                                <button type="button" class="btn btn-md btn-primary w-100 btn-login">
                                    <span> Já tenho uma conta</span>
                                </button>
                            <a>
                        </div>
                    </div>                                         
                </form>
                <a><span></span></a> 
            </div>
        </div>
    </div>
    <?php
        require('footer.html');
    ?>
</body>

</html>