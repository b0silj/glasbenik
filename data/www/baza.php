<?php
$host = 'podatkovna-baza';
$db   = 'glasbenik';
$user = 'root';
$pass = 'superVarnoGeslo';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $povezava = new PDO($dsn, $user, $pass, $options);
    echo "<div class='alert alert-success text-center'>Povezava na bazo uspešna!</div>";
} catch (PDOException $e) {
    echo "<div class='alert alert-danger text-center'>Povezava ni uspela: " . $e->getMessage() . "</div>";
}
?>