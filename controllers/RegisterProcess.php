<?php
require_once '../models/User.php';

if (isset($_POST['register_submit'])) {
    $f_name     = $_POST['f_name'];
    $l_name     = $_POST['l_name'];
    $email      = $_POST['email'];
    $pwd        = $_POST['pwd'];
    $role       = $_POST['role'];
    $speciality = $_POST['speciality'];

    $res = (new User($f_name, $l_name, $email, $pwd, $role, $speciality))->register();

    if ($res) {
        $success = true;
        header('location: /');
        exit;
    }
}
?>

