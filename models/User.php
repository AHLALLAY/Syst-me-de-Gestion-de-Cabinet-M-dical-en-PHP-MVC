<?php
require_once 'Database.php';

class User
{
    protected $f_name;
    protected $l_name;
    protected $pwd_hashed;
    protected $email;
    protected $role;
    protected $speciality;

    public function __construct($f_name = null, $l_name = null, $email = null, $pwd_hashed = null, $role = null, $speciality = null)
    {
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->email = $email;
        $this->pwd_hashed = $pwd_hashed;
        $this->role = $role;
        $this->speciality = $speciality;
    }

    public function login($email, $pwd)
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($pwd, $user['pwd_hashed'])) {
            return $user;
        }
        return false;
    }

    public function register()
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();
        
        $hashed_pwd = password_hash($this->pwd_hashed, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (f_name, l_name, email, pwd_hashed, roles, speciality) VALUES (:f_name, :l_name, :email, :pwd_hashed, :roles, :speciality)");
        $stmt->bindParam(':f_name', $this->f_name);
        $stmt->bindParam(':l_name', $this->l_name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pwd_hashed', $hashed_pwd);
        $stmt->bindParam(':roles', $this->role);
        $stmt->bindParam(':speciality', $this->speciality);

        return $stmt->execute();
    }

    public function getDoctors()
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM users WHERE roles = 'doctor'");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
