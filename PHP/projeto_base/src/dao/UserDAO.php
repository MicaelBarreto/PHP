<?php

class UserDAO {

    public static function add($user) {
        $db = Database::getConnection();

        $stmt = $db->prepare('INSERT INTO users (username, password, city) VALUES (:username, :password, :city)');
        $stmt->execute(array(
          ':username' => $user->getUsername(),
          ':password' => $user->getPassword(),
          ':city' => $user->getCity()
        ));

        return $stmt->rowCount();
    }

    public static function verify($user) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare('SELECT * FROM users where username = :username');
        $stmt->execute(array(
                ':username' => $user->getUsername()
        ));

        $rows = $stmt->fetchAll();

        $user_db_password = $rows[0]['password'];

        if ($user->getPassword() == $user_db_password) {
            return true;
        } else {
            return false;
        }
    }

    public static function all() {
        $db = Database::getConnection();

        $stmt = $db->prepare('SELECT id,username FROM users');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function verify_recover($user){
        $db = Database::getConnection();
        
        $stmt = $db->prepare('SELECT username, city FROM users where username = :username and city = :city');
        $stmt->execute(array(
                ':username' => $user->getUsername(),
                ':city' => $user->getCity()
        ));

        $rows = $stmt->fetchAll();
        
                $user_db_user = $rows[0]['username'];
                
        
                if ($user->getUsername() == $user_db_user) {
                    return true;
                } else {
                    return false;
                }
    }

    public static function update_Password($user){
        $db = Database::getConnection();
        
        $stmt = $db->prepare('UPDATE users SET password = :password where username = :username');
        $stmt->execute(array(
                ':password' => $user->getPassword(),
                ':username' => $user->getUsername()
        ));
        $rows = $stmt->fetchAll();
        
                $user_db_user = $rows[0]['password'];
                
        
                if ($user->getPassword() == $user_db_user) {
                    return false;
                } else {
                    return true;
                }
    }

}