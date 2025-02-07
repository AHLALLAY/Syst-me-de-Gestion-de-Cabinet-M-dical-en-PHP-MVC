<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/3/core/connection.php';

$con = (new Connexion())->getConnection();

// Préparer la requête SQL pour insérer un nouveau rendez-vous
$stmt = $con->prepare("INSERT INTO appointment (app_date, patient, doctor) VALUES (NOW(), :user_id, :doctor_id)");
$stmt->bindParam(':user_id', $user);
$stmt->bindParam(':doctor_id', $doctor);
$stmt->execute();

require_once $_SERVER['DOCUMENT_ROOT'] . '/3/view/patient/Dashboard.php';