<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/3/core/connection.php';
$con = (new Connexion())->getConnection();

$stmt = $con->prepare("SELECT * FROM users WHERE roles = 'doctor'");
$stmt->execute();

$rendezvous = $stmt->fetchAll(PDO::FETCH_ASSOC);