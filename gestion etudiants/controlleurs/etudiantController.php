<?php
require_once __DIR__ . '/../models/Etudiant.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $date_naissance = $_POST["date_naissance"];

    if (Etudiant::ajouterEtudiant($nom, $prenom, $email, $date_naissance)) {
        header("Location: ../views/index.php");
        exit();
    } else {
        echo "Erreur lors de l'ajout de l'étudiant.";
    }
}
?>
