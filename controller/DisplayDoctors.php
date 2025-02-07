<?php

// Connexion à la base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/3/core/connection.php';


// Vérifier si l'utilisateur est connecté (s'il a une session active)
if (!isset($_SESSION['user'])) {
    echo "Vous devez être connecté pour voir vos rendez-vous et les médecins.";
    exit;
}

try {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/3/model/getDoctor.php';
    if ($rendezvous) {
        echo "<h2>Médecins :</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Doctor</th><th>Joined Date</th><th>Action</th></tr>";

        foreach ($rendezvous as $rdv) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($rdv['user_id']) . "</td>";
            echo "<td>" . htmlspecialchars($rdv['f_name']) . " " . htmlspecialchars($rdv['l_name']) . "</td>";
            echo "<td>" . htmlspecialchars($rdv['joined_date']) . "</td>";
            echo "<td><form action='/3/controller/AppointmentContoller.php' method='POST'>";
            echo "<input type='text' name='doctor_id' value='" . htmlspecialchars($rdv['user_id']) . "'>";
            echo "<button type='submit'>Get Appointment</button>";
            echo "</form></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun rendez-vous trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des rendez-vous : " . $e->getMessage();
}
