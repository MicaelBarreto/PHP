<?php 
session_start();
require_once "src/utils/FlashMessage.php";

include_once "src/partials/_head.php";

?>

<div class = "container">
    <div class="wrapper">
        <form action="passwordUpdate.php" method="POST" name="Login_Form" class="form-signin">
            <?= FlashMessage::printMessage(); ?>  

            <h3 class="form-signin-heading">Recuperação de Senha</h3>
            <hr class="colorgraph"><br>
            
            <input type="text" class="form-control" name="usuario" value="<?=$_SESSION['g']?>" required="" autofocus="" tabindex="1" readonly="readonly"/>     		  
            
            <input type="password" class="form-control" name="senha" placeholder="Senha" required="" tabindex="2"/> 
            <input type="password" class="form-control" name="senha_confirmada" placeholder="Confirmar Senha" required="" tabindex="3"/> 

            
            
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="3">Redefinir</button>  			

        </form>			
    </div>
</div>

</body>
</html>