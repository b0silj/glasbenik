<?php
$host = 'podatkovna-baza'; // Ime storitve iz docker-compose
$db   = 'projekt';         // Ime tvoje baze (spremeni, če se imenuje drugače)
$user = 'root';
$pass = 'superVarnoGeslo';  // Geslo, ki ga imaš v docker-compose
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $povezava = new PDO($dsn, $user, $pass, $options);
     echo "<div class='alert alert-success text-center'>Povezava na bazo uspešna! 🎉</div>";
} catch (\PDOException $e) {
     // Če baza še ne obstaja, bo izpisalo napako, a stran bo vseeno delala
     echo "<div class='alert alert-warning text-center'>Povezava do strežnika dela, baza '$db' pa še ne obstaja.</div>";
}
?>