<?php
// Connexion à la base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/3/core/connection.php';

$con = (new Connexion())->getConnection();

$stmt = $con->prepare("SELECT * FROM users WHERE email = :email AND pwd_hashed = :password");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
// echo $result['roles'];
if ($stmt->rowCount() > 0) {
    session_start();
    $_SESSION['user'] = $email;
    $_SESSION['id'] = $result['user_id'];
    
    header('Location: /3/View/'.$result['roles'].'/dashboard.php');
    exit;
} else {
    echo "Email ou mot de passe incorrect.<br>";
}
