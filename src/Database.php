<?php

namespace App;
use PDO;

class Database{
    private string $host = "localhost";
    private string $db_name = "eshop";
    private string $username = "root";
    private string $password = "";
    public $conn;

    public function nadviazSpojenie(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host={$this->host}; dbname={$this->db_name}", $this->username, $this->password);
        }
        catch(Exception $e){
            echo "Chyba pripojenia {$e->getMessage()}";
        }

        return $this->conn;
    }

}