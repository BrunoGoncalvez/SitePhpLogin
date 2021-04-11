<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WebProgram - Área Administrativa</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">

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
	
    <style>
        .navbar{
            margin-bottom: 0;
        }       
    </style>	

    <script src="scripts/jquery.mask.js"></script>
    <script>       
        $(document).ready(function(){
            $("#tel-cliente").mask("(00) 0000-0000");
        });	
    </script>
</head>

    <body>	
        <?php
            include 'conexao.php';            
            include 'nav.php';
            include 'crud.php';

            if(empty($_SESSION['STATUS']) || $_SESSION['STATUS'] != 1){
                header('location:index.php');
            }

            $consulta = $cn->query('SELECT * from clientes;');
            
            
        ?>
        
        <div class="col-12" style="height: 100px;"></div>
        
        <div class="container">
            <div class="row" style="">
                <div class="col-12 text-center">                   
                    <h2 class="text-center">Área administrativa</h2>
                </div>
            </div>

            <div class="col-12" style="height: 60px;"></div>

            <div class="row">           
                <div class="col-md-8">
                    <div class="list">
                        <h2 class="text-center"><b>Lista de Clientes</b></h2><br><br>
                        <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="row">                               
                                <div class="col-md-3">
                                    <p><b><?php echo $exibe['nome_cliente'] ?></b></p>
                                </div>

                                <div class="col-md-3">
                                    <p><b><?php echo $exibe['tel_cliente']?></b></p>
                                </div>
                                <div class="col-md-3">
                                    <p><b><?php echo $exibe['estado_cliente'] ?></b></p>
                                </div> 
                                <div class="col-3">
                                    <a href="admin.php?edit=<?php echo $exibe['id_cliente'];?>">
                                        <button type="button" name="edit" class="btn btn-warning btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </a>

                                    <a href="crud.php?delete=<?php echo $exibe['id_cliente'];?>">
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="text-center">Formulário Cliente</h3><br>
                    <form class="needs-validation" novalidate action="crud.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                       <div class="form-group"> 
                            <label >Nome Cliente</label>
                            <input type="text" class="form-control" value = "<?php echo $nome; ?>" required name="nome-cliente" 
                                placeholder="Digite o nome do cliente">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Telefone Cliente</label>
                            <input type="text" class="form-control" value = "<?php echo $telefone; ?>" required 
                                name="tel-cliente" id="tel-cliente" placeholder="Digite o telefone do cliente">
                        </div>
                        <div class="form-group">
                            <label >Localização Cliente</label>
                            <select class="form-control" name="estado-cliente" required>
                                <option value = "<?php echo $estado; ?>" disabled selected></option> 
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
                        <?php if($update == true){ ?>
                            <button type="submit" name="update" class="btn btn-primary">Editar</button>
                        <?php }else{ ?>
                            <button type="submit" name="save" class="btn btn-success">Adicionar</button>
                        <?php } ?>
                    </form>                  
                </div>
            </div>
            
        </div>
        <script>
            // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                    var forms = document.getElementsByClassName('needs-validation');
                    // Faz um loop neles e evita o envio
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
        
        <?php include 'footer.html' ?>       
    </body>
</html>