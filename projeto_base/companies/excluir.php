<?php
    session_start();
    require_once "../src/utils/Database.php";
    require_once '../src/dao/CompanyDAO.php'; 
    require_once "../src/utils/FlashMessage.php";
    include_once "../src/partials/_verify_auth_companies.php";
    

    $id = $_GET['id'];

    CompanyDAO::delete($id);

    header('Location: index.php');
    exit;

?>