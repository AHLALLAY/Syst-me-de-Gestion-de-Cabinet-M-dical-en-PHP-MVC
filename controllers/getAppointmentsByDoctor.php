<?php
require_once '../../models/Appointment.php';
session_start();

$appointments = new Appointment();
$appointment = $appointments->getAppointmentsByDoctor($_SESSION['id']);

?>