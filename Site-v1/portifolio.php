<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - WebProgram Development</title>

    <script src="https://kit.fontawesome.com/05bbd2c08b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png">
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
</head>

<body>

    <?php
        require('nav.php');
    ?>

    <div class="container">

        <div class="row" style="height: 30px;"></div>

        <div class="row justify-content-center align-items-center text-center proj-destaque">
            <div class="col-md-12">
                <h3 style="color: #fff;">Projeto em Destaque</h3>
                <br>
                <div>
                    <img src="img/cliente-clouddata.png">
                </div>
                <br>
                <h6 style="color: #0000ff;">Desenvolvimento de sistema</h6>

                <h4 class="name-cliente">CloudData</h4>
            </div>
        </div>

        <div class="row" style="height: 50px;"></div>

        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card-proj">
                    <img src="img/cliente-hunterApp.webp">
                    <p class="serv-port">Criação de site</p>
                    <h5 class="name-cliente">Hunter App</h5>
                    <h5>Desenvolvimento Web</h5>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-proj">
                    <img src="img/cliente-natcorp.webp">
                    <p class="serv-port">Criação de plataforma</p>
                    <h5 class="name-cliente">NatCorp</h5>
                    <h5>Desenvolvimento de Sistema</h5>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-proj">
                    <img src="img/cliente-percursos.webp">
                    <p class="serv-port">Criação de site</p>
                    <h5 class="name-cliente">Percursos</h5>
                    <h5>Desenvolvimento Web</h5>
                </div>
            </div>
        </div>

        <div class="row" style="height: 100px;"></div>

        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="card-proj">
                    <img src="img/cliente-contcont.webp">
                    <p class="serv-port">Criação de Aplicativo</p>
                    <h5 class="name-cliente">ContCont</h5>
                    <h5>Desenvolvimento de Aplicativo</h5>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card-proj">
                    <img src="img/cliente-yes.png">
                    <p class="serv-port">Segurança</p>
                    <h5 class="name-cliente">Yes Security</h5>
                    <h5>integração de Sistemas</h5>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card-proj">
                    <img src="img/cliente-arpa.png">
                    <p class="serv-port">Criação de plataforma</p>
                    <h5 class="name-cliente">Arpa Capital</h5>
                    <h5>Desenvolvimento de Sistemas</h5>
                </div>
            </div>
        </div>

        <div class="row" style="height: 100px;"></div>

    </div>

    <?php
        require('footer.html');
    ?>
</body>

</html>