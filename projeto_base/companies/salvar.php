<?php
    session_start();
    require_once "../src/partials/_head.php";
    require_once '../src/dao/CompanyDAO.php';
    require_once '../src/entities/Company.php';
    require_once '../src/utils/Database.php';
    require_once "../src/utils/FlashMessage.php";
    include_once "../src/partials/_verify_auth_companies.php";
    
    $company = new Company;

    $company->setRs($_POST['rs']);
    $company->setNf($_POST['nf']);
    $company->setCnpj($_POST['cnpj']);
    $company->setIe($_POST['ie']);
    $company->setAddr($_POST['add']);
    $company->setComp($_POST['comp']);
    $company->setTel($_POST['tel']);
    $company->setEmail($_POST['email']);

    CompanyDAO::add($company);

    header('Location: index.php');
    exit;
?>
      
    
