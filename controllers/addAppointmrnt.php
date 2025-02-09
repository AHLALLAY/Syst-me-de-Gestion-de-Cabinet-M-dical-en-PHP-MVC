<?php
require_once '../models/Appointment.php';

session_start();



if (isset($_POST['getAppBtn'])) {
    $app = new Appointment();

    $spe = $_POST['spe'];
    $doctorId = $_POST['doctor_id'];
    $patient = $_SESSION['id'];

    $new_app = $app->addAppointment($patient, $doctorId, $spe);

    if ($new_app) {
        header("location: /views/patient/dashboard.php");
        exit();
    } else {
        die("Erreur lors de l'ajout du rendez-vous.");
    }
}