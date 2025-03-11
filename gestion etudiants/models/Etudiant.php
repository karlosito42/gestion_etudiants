<?php
require_once __DIR__ . '/../config/database.php';

class Etudiant {
    public static function ajouterEtudiant($nom, $prenom, $email, $date_naissance) {
        $pdo = Database::getConnection();
        $sql = "INSERT INTO Etudiants (nom, prenom, email, date_naissance) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nom, $prenom, $email, $date_naissance]);
    }

    public static function getEtudiants() {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM Etudiants");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
