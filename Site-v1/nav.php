<nav class="fixed-top">

    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <img class="logo" src="img/logo-nav1.png">
    <!--<label class="logo">Web Logo</label>-->
    <ul>
        <li><a class="efeito" href="index.php">Home</a></li>
        <li><a class="efeito" href="portifolio.php">Portfólio</a></li>
        <li><a class="efeito" href="service.php">Serviços</a></li>
        <li><a class="efeito" href="contato.php">Contato</a></li>

        <?php
            include 'conexao.php';
            session_start();               
            
                    
        
            if(empty($_SESSION['ID'])) { ?>
            <li><a href="login.php"><button class="btn btn-md btn-danger far fa-user bar btn-entrar"> Login </button></a></li>
            <?php } else { 

                    if($_SESSION['STATUS'] == 0 ){
                        $consultaUsuario = $cn->query("SELECT Nome_usuario from usuario where ID_Usuario = '$_SESSION[ID]'");
                        $exibeUsuario = $consultaUsuario->fetch(PDO::FETCH_ASSOC);
            ?>          
                        <li><a href="#"><button class="btn btn-sm btn-success"> <?php echo $exibeUsuario['Nome_usuario'];?> </button></a></li>
                        <li><a href="sair.php"><i class="fas fa-sign-out-alt"> Sair</i></a></li> 
              <?php }else{ ?>
                        <li><a href="admin.php"><button class="btn btn-sm btn-danger"> Administrador </button></a></li>
                        <li><a href="sair.php"><i class="fas fa-sign-out-alt"> Sair</i></a></li>
               <?php } ?> 
            <?php } ?>
    </ul>
</nav>