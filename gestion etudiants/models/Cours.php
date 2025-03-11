<?php
require_once __DIR__ . '/../config/database.php';

class Cours {
    public static function ajouterCours($nom, $professeur, $horaire, $salle) {
        $pdo = Database::getConnection();
        $sql = "INSERT INTO Cours (nom, professeur, horaire, salle) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nom, $professeur, $horaire, $salle]);
    }

    public static function getCours() {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM Cours");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

