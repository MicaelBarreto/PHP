<?php 
session_start();
require_once "src/utils/FlashMessage.php";

include_once "src/partials/_head.php" 

?>

<div class = "container">
    <div class="wrapper">
        <form action="register.php" method="POST" name="Login_Form" class="form-signin">       
            <?= FlashMessage::printMessage(); ?>  
            
            <h3 class="form-signin-heading">Cadastro</h3>
            <hr class="colorgraph"><br>
            
            <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" tabindex="1" />
            <input type="password" class="form-control" name="senha" placeholder="Senha" required="" tabindex="2"/>     		  
            <input type="password" class="form-control" name="senha_confirmada" placeholder="Confirmar Senha" required="" tabindex="3"/> 

            <input type="text" class="form-control" name="city" placeholder="Cidade que Nasceu" required="" tabindex="4"/>      		  
            
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="5">Cadastrar</button>  			
            <hr />
            
            <a href="index.php" class="btn btn-lg btn-default btn-block">Entrar</a>
        </form>			
    </div>
</div>

</body>
</html>