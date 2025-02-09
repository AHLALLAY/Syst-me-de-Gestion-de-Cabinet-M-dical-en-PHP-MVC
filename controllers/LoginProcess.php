<?php
require_once '../models/User.php';
session_start();
// Vérifiez si l'utilisateur est déjà connecté
if(isset($_SESSION['email'])) {
    // Redirigez directement vers le dashboard
    header('Location: /views/' . $_SESSION['role'] . '/dashboard.php');
    exit;
}

if (isset($_POST['login_submit'])) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $user = (new User())->login($email, $pwd);

        if ($user) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['id'] = $user['user_id'];
            $_SESSION['role'] = $user['roles'];


            header('Location: views/' . $_SESSION['role'] . '/dashboard.php');
            exit;
        } else {
            echo "<script>alert('Login Failed')</script>";
            header('location: ' . $_SERVER['PHP_SELF']);
            exit;
        }
    }
}
?>
