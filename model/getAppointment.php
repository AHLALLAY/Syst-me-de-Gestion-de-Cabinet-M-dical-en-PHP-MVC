<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/3/core/connection.php';
$con = (new Connexion())->getConnection();

$stmt = $con->prepare("SELECT u2.f_name, u2.l_name, appointment.app_date
FROM appointment
JOIN users u1 ON appointment.patient = u1.user_id
JOIN users u2 ON appointment.doctor = u2.user_id
WHERE u1.email = :email");
$stmt->bindParam(':email', $_SESSION['user']);
$stmt->execute();

$rendezvous = $stmt->fetchAll(PDO::FETCH_ASSOC);