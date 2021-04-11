<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - WebProgram Development</title>
  
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
    <div class="row" style="height: 80px;"></div>
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-md-6">
                <h3 class="text-center">Envie sua mensagem</h3><hr><br>
                <form action="">
                    <div class="form-group">
                        <label for="name">Nome completo:</label>
                        <input type="text" class="form-control" placeholder = "Digite seu nome completo">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" class="form-control" placeholder = "Digite seu e-mail">
                    </div>

                    <div class="form-group">
                        <label for="name">Assunto:</label>
                        <input type="text" class="form-control" placeholder = "Digite o assunto">
                    </div>

                    <div class="form-group">
                        
                        <label for="endereco">Mensagem</label>
                        <textarea name="endereco" rows="5" class="form-control" required id="endereco" placeholder="Digite sua mensagem"></textarea>
                    </div> 
                    <br><br>
                    <div class="row justif-content-center align-items-center" style="height: 50px;">
                        <div class="col-12" >
                            <button type="submit" name="msg-contato" class="btn btn-primary">Enviar</button>
                            <a href="index.php"><button type="button" name="canc-contato" class="btn btn-primary">Cancelar</button></a>
                        </div>
                    </div> 
                </form>             
            </div>
            <div class="col-md-5 offset-md-1">
                <h3 class="text-center">Faça uma visita</h3><hr><br>
                <p><strong>Estamos prontos para te atender</strong> </p>

                <p>Rua da Imaginação, 425 - Jardim Europa | São Paulo - SP</p> 
                <p>CEP: 06468-140 </p><br>
                <p> Horário de atendimento:</p>
                <p> De segunda-feira a sexta-feira das 8h às 17h.</p><br>
                <p><strong>Ou ligue</strong> </p>
                <p>(11) 3636-7474</p>
                <p>(11) 93636-7474 WhatsApp (mensagens de texto)</p>
                <br>
                <p> Horário de atendimento:</p>
                <p> De segunda-feira a sexta-feira das 8h às 17h.</p><br>

                <p><strong>E-mail: </strong> contato@webprogram.com.br</p>


            </div>           
        </div>  
    </div>
    <?php
        require('footer.html');
    ?>
</body>
</html>