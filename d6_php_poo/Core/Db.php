<?php

namespace App\Core;

class Db {

    private $connectSql;
    private $username;
    private $password;
    private $errorConnection;

    public function __construct()
    {
        $this->connectSql = 'mysql:host=localhost;port=3306;dbname=d6_php_poo_zoo;charset=utf8'; 
        $this->username = 'root';
        $this->password = '';   
        $this->errorConnection = array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION);     
    }

    public function connectDb()
    {
        try {
            $bdd = new \PDO(
                $this->connectSql,
                $this->username,
                $this->password,
                $this->errorConnection);                
                return $bdd;
        } catch (\Exception $e) {
            die("Erreur : " . $e->getMessage());
        }        
    }   
}

?>