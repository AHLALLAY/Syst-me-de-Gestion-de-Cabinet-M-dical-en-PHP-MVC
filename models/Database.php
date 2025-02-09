<?php
class Database
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;

    private static $instance = null;

    private function __construct()
    {
        $config = $this->loadConfig();
        $this->host = $config['host'];
        $this->user = $config['user'];
        $this->password = $config['password'];
        $this->database = $config['database'];
    }

    private function loadConfig()
    {
        return [
            'host' => 'localhost',
            'user' => 'postgres',
            'password' => '0',
            'database' => 'CabinetMedicale'
        ];
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        if ($this->conn === null) {
            try {
                $dsn = "pgsql:host={$this->host};dbname={$this->database}";
                $this->conn = new PDO($dsn, $this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception("Connection to database failed: " . $e->getMessage());
            }
        }
        return $this->conn;
    }

    public function closeConnection()
    {
        if ($this->conn !== null) {
            $this->conn = null;
        }
    }

    private function __clone() {}
}