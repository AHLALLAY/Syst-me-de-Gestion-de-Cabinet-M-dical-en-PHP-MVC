<?php

// Connexion à la base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/3/core/connection.php';

session_start();

// Vérifier si l'utilisateur est connecté (s'il a une session active)
if (!isset($_SESSION['user'])) {
    echo "Vous devez être connecté pour voir vos rendez-vous.";
    exit;
}

// Récupérer l'email de l'utilisateur à partir de la session
$email = $_SESSION['user'];

try {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/3/model/getAppointment.php';
    if ($rendezvous) {
        echo "<h2>Vos rendez-vous :</h2>";
        echo "<table>";
        echo "<tr><th>Doctor</th><th>date</th></tr>";
    
        foreach ($rendezvous as $rdv) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($rdv['f_name']) . " " . htmlspecialchars($rdv['l_name']) . "</td>";
            echo "<td>" . htmlspecialchars($rdv['app_date']) . "</td>";
            echo "</tr>";
        }
    
        echo "</table>";
    } else {
        echo "Aucun rendez-vous trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des rendez-vous : " . $e->getMessage();
}
