<?php

class Validation extends DB {

    public function __construct() {
        $dbConfig = array(
            "DB_DNS" => 'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
            "DB_USER" => 'root',
            "DB_PASSWORD" => ''
        );
        parent::__construct($dbConfig);
    }
    public function emailIsValid($email) {
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
    }
    public function loginExists($email) {
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * FROM USERS WHERE EMAIL = :email");
        $binds = array(
            ":email" => $email
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
          
            return true;
        }
        
        return false;
    }
}