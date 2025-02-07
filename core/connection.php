<?php

class Connexion {
    private $host = 'localhost';
    private $username = 'postgres';
    private $pwd = '0';
    private $database = 'CabinetMedicale';
    private $con;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            $this->con = new PDO("pgsql:host={$this->host};dbname={$this->database}", $this->username, $this->pwd);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection success<br>";
        } catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->con;
    }
}

// Exemple d'utilisation
// try {
//     $connexion = new Connexion();
//     $connection = $connexion->getConnection();
//     // Vous pouvez maintenant utiliser $connection pour exécuter des requêtes
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }