<?php

class Connexion {
    private $host = 'localhost';
    private $user = 'postgres';
    private $pass = '0';
    protected $base = null;
    protected $conn = null;

    public function __construct($host=null, $user=null, $pass=null, $base=null) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->base = $base;

        $this->connect();
    }

    private function connect() {
        try {
            $this->conn = new PDO("pgsql:host={$this->host};dbname={$this->base}", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}