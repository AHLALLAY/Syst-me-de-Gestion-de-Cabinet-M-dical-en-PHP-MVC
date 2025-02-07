<?php
if (!isset($_SESSION['user'])) {
    echo "Vous devez être connecté pour prendre un rendez-vous.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $doctor = $_POST['doctor_id'];
    $user = $_SESSION['id'];

    echo "doctor id : ".$doctor."<br>";
    echo "user id : ".$user."<br>";
    require_once $_SERVER['DOCUMENT_ROOT'] . '/3/model/AddAppointment.php';
    

} else {
    echo "Le formulaire n'a pas été soumis en méthode POST.<br>";
}
?>