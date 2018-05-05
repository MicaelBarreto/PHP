<?php
    require_once 'src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    $user->setUsername($_POST['usuario']);
    $user->setCity($_POST['city']);
    $g=$user->getUsername($_POST['usuario']);
    
    $status = UserDAO::verify_recover($user);
    
    if ($status) {
        //$_SESSION['user'] = ($user);
        $_SESSION['g'] = ($g);
        FlashMessage::setMessage('Usuário e cidade encontrados com sucesso.', FlashMessage::OK);
        header('Location: /redefine.php');
    } else {
        FlashMessage::setMessage('Credenciais incorretas favor tentar novamente.', FlashMessage::ERROR);
        header('Location: /recover.php');
    }

    