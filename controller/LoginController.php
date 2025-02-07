<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    if (!empty($email) && !empty($password)) {
        try {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/3/model/LoginModel.php';
            
        } catch (PDOException $e) {
            echo "Erreur lors de la vérification des informations : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.<br>";
    }
} else {
    echo "Le formulaire n'a pas été soumis en méthode POST.<br>";
}
