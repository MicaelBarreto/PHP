<?php
    require_once 'src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    if ($_POST['senha'] == $_POST['senha_confirmada']) {
        $user->setUsername($_POST['usuario']);
        $user->setPassword($_POST['senha']);
    } else {
        echo 'Senhas não conferem';        
    }
    
    $status = UserDAO::update_Password($user);

    if ($status) {
        $_SESSION['user'] = ($user);
        FlashMessage::setMessage('Senha redefinida com sucesso!', FlashMessage::OK);
        header('Location: /index.php');
    } else {
        FlashMessage::setMessage('Ocorreu um erro ao redefinir a senha!', FlashMessage::ERROR);
        header('Location: /redefine.php');
    }

    