<?php
require_once __DIR__ . '/../models/Etudiant.php';
require_once __DIR__ . '/../models/Cours.php';

$etudiants = Etudiant::getEtudiants();
$cours = Cours::getCours();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Étudiants et Cours</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <h1>Liste des Étudiants</h1>
    <table border="1">
        <tr>
            <th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Date de Naissance</th>
        </tr>
        <?php foreach ($etudiants as $etudiant) : ?>
            <tr>
                <td><?= $etudiant['id'] ?></td>
                <td><?= $etudiant['nom'] ?></td>
                <td><?= $etudiant['prenom'] ?></td>
                <td><?= $etudiant['email'] ?></td>
                <td><?= $etudiant['date_naissance'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Liste des Cours</h1>
    <table border="1">
        <tr>
            <th>ID</th><th>Nom</th><th>Professeur</th><th>Horaire</th><th>Salle</th>
        </tr>
        <?php foreach ($cours as $c) : ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['nom'] ?></td>
                <td><?= $c['professeur'] ?></td>
                <td><?= $c['horaire'] ?></td>
                <td><?= $c['salle'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="ajouter_etudiant.php">Ajouter un étudiant</a> |
    <a href="ajouter_cours.php">Ajouter un cours</a>
</body>
</html>
