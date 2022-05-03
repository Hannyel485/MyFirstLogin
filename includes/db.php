<?php

class DB{
    private $server;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->server = 'localhost';
        $this->db = 'users';
        $this->user = 'hannyel';
        $this->password = 'hannyel';
        $this->charset = 'utf8mb4';
    }

    public function connect(){
        try {
            $connection = "mysql:server=". $this->server . ";dbname=". $this->db . ";charset=" . $this->charset; 
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];

            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            print_r("Error connection: ". $e->getMessage());
        }
    }

}



?>