<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - WebProgram Development</title>

        <link rel="shortcut icon" href="img/icon.png">

        <script src="https://kit.fontawesome.com/05bbd2c08b.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        
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
            include 'conexao.php';
            include 'nav.php';
        ?>

        <div class="container">            
            <div class="row" style="height: 30px;"></div>
            
            <?php
                 require('cabecalho.html');
             ?>
            
            <div class="row">
                <br><br><br>
            </div>

            
            <br><br>
                <div id="box-post">
                    <div class="row align-items-center justify-content-around">
                        <div class="col-12 text-center">
                            <h3 class="titulo-hist text-center">Nossa <strong> História </strong></h3>
                            <span style="border-botton: 3px solid #fd5d00; width: 70px;"></span>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="postagem" style="width: 100%; height: 100%;" src="img/web-program.png" alt="">
                        </div>
                                       
                        <div class="col-md-6">
                            <h4 class="text-center">WebProgram Development</h4><br>
                            <p style="text-align: justify;">
                                A empresa Web Program nasceu no ano de 2020 com foco na área de TI, atuando no desenvolvimento
                                de
                                sistemas de controle de produtos, desenvolvimento gráfico, layout, identidade visual,
                                desenvolvimento de aplicativo mobile e e-commerce integrado com o sistema de gerenciamento do
                                estoque. <br><br>


                                A Web Program surgiu da iniciativa de seis amigos, jovens, estudantes do curso de
                                desenvolvimento de
                                sistemas da Etec Professor Basilides de Godoy, a junção do conhecimento adquirido no decorrer
                                desse
                                curso permitiu o desenvolvimento dos mais diversos trabalhos na área de TI.<br>

                            </p>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <br>
                            <p>
                                No início, eram apenas alguns projetos para conhecer e testar as ferramentas utilizadas no
                                desenvolver no curso, mas, a prática diária e os longos períodos de estudo foram aguçando a
                                criatividade desses jovens, logo, começaram a perceber a utilidade das ferramentas estudadas,
                                como
                                aplicá-las no cotidiano das grandes corporações, assim como, as necessidades no mercado de
                                profissionais com aquela mentalidade e objetivo, a partir daí surgia a Web Program.
                            </p>
                        </div>
                    </div>
                </div>

            <br><br>
            <div id="box-post">
                <div class="row justify-content-around align-items-center text-center">
                    <div class="col-md-4">   
                        <div class="serv-img">
                            <img src="img/index-vision.png" alt="">
                        </div>                  
                    </div>
                    <div class="col-8">
                        <h4 class="text-center">Visão</h4><hr>
                        <p>
                        Com foco no constante crescimento e desenvolvimento sustentável e responsável, através de 
                        atitudes com base na ética, na qualidade e no respeito ao próximo, superar as expectativas 
                        dos nossos parceiros, servindo de referência no atendimento comercial no país.
                        </p><br>
                    </div>
                </div>

                <div class="row justify-content-around align-items-center text-center">
                    <div class="col-md-4">   
                        <div class="serv-img">
                            <img src="img/index-mission.png" alt="">
                        </div>                  
                    </div>
                    <div class="col-8">
                        <h4 class="text-center">Missão</h4><hr>
                        <p>
                            Temos como missão tornar a tecnologia acessível a todos, em todos os setores do mercado. 
                            Atendendo com excelência, permitindo que todos tenham acesso à informação e à 
                            informatização do seu negócio, não importando o seu tamanho, local ou ramo de atuação no mercado.
                        </p><br>
                    </div>
                </div>

                <div class="row justify-content-around align-items-center text-center">
                    <div class="col-md-4">   
                        <div class="serv-img">
                            <img src="img/index-value.png" alt="">
                        </div>                  
                    </div>
                    <div class="col-8">
                        <h4 class="text-center">Valores</h4><hr>
                        <p>
                            Comprometimento ético com clientes e desenvolvimento humano, respeito aos colaboradores, 
                            fornecedores, sociedade e meio ambiente.
                            <strong> Transparência nas ações, </strong>
                            <strong>Responsabilidade, Honestidade e Respeito;</strong>
                        </p><br>
                    </div>
                </div>
            </div>

            
            <br><br><br><br>
            <div class="row">
                <div class="col-12">
                    <h3 style="border-bottom: 3px solid #262626; padding-bottom: 5px;"> Serviços</h3>
                </div>
            </div>
            <br><br>
            

            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                    <img src="img/sites-desenv.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Escolha o tipo de site</h5>
                        <p class="card-text">
                            Site institucional, e-commerce ou catálogo?<br>
                            <b>Qual site é o ideal para você?</b><br><br>
                        </p>
                        <a href="service.php">
                            <button type="button" class="btn btn-outline-danger">Saiba mais</button>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                    <img src="img/app-desenv.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Desenvolvimento de Aplicativos</h5>
                        <p class="card-text">
                            Desenvolvimento sistemas e aplicativos para Android e IOS para atender o seu negócio e 
                            os seus clientes.<br>
                        </p>
                        <a href="service.php">
                            <button type="button" class="btn btn-outline-danger">Saiba mais</button>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                    <img src="img/integracao.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Integração de Sistemas</h5>
                        <p class="card-text">
                            Uma integração de sistemas se tornou essencial para otimizar processos e  centralizar dados.
                        </p>
                        <a href="service.php">
                            <button type="button" class="btn btn-outline-danger">Saiba mais</button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>

        </div>

        <?php
            include 'footer.html';
        ?>
    </body>
</html>