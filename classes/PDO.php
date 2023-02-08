<?php

class DbPDO
{

    private string $server;
    private string $username;
    private string $password;
    private string $database;

    public function __construct()
    {
        $this->server = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'table_test_php';
    }

    public function connect(): ?PDO
    {
        try {
            $db = new PDO ("mysql:host=$this->server; dbname=$this->database", $this->username, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "OK";
        } catch (PDOException $e) {
            echo "Erreur de connexion à la db: " . $e->getMessage();
            return null;
        }

        return $db;
    }
}