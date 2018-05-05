<?php 
session_start();
require_once "src/utils/FlashMessage.php";

include_once "src/partials/_head.php"

?>

<div class = "container">
    <div class="wrapper">
        <form action="recover_validate.php" method="post" name="Login_Form" class="form-signin">
            <?= FlashMessage::printMessage(); ?>  

            <h3 class="form-signin-heading">Redefinição de Senha</h3>
            <hr class="colorgraph"><br>
            
            <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" tabindex="1" />     		  
            <input type="text" class="form-control" name="city" placeholder="Cidade que Nasceu" required="" autofocus="" tabindex="2" />   		  
            
            
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="3">Próximo</button>  			
        
        </form>			
    </div>
</div>

</body>
</html>