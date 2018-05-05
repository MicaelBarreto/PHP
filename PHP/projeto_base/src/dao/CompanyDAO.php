<?php

class CompanyDAO {

    public static function add($company){
        $db = Database::getConnection();

        $stmt = $db->prepare('INSERT INTO company(rs, nf, CNPJ, ie, addr, comp, tel, email) VALUES (:rs, :nf, :CNPJ, :ie, :addr, :comp, :tel, :email)');
        $stmt->execute(array(
            ':rs' => $company->getRs(),
            ':nf' => $company->getNf(),
            ':CNPJ' => $company->getCnpj(),
            ':ie' => $company->getIe(),
            ':addr' => $company->getAddr(),
            ':comp' => $company->getComp(),
            ':tel' => $company->getTel(),
            ':email' => $company->getEmail()
        ));
        
        return $stmt->rowCount();
    }

    public static function all() {
        $db = Database::getConnection();

        $stmt = $db->prepare('SELECT * FROM company');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function delete($id){
        $db = Database::getConnection();

        $stmt = $db->prepare('DELETE FROM company WHERE id = :id');
        $stmt->execute(array(':id' => $id));


    }

    public static function update($company){
        $db = Database::getConnection();
        
        $stmt = $db->prepare('UPDATE company SET  rs = :rs, nf=:nf, CNPJ = :CNPJ, ie = :ie, addr = :addr, comp = :comp, tel = :tel, email=:email where id = :id');
        $stmt->execute(array(
            'id' => $company->getId(),
            ':rs' => $company->getRs(),
            ':nf' => $company->getNf(),
            ':CNPJ' => $company->getCnpj(),
            ':ie' => $company->getIe(),
            ':addr' => $company->getAddr(),
            ':comp' => $company->getComp(),
            ':tel' => $company->getTel(),
            ':email' => $company->getEmail()
        ));


    }
}