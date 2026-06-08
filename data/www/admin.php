<?php
require_once 'baza.php';

// delete
if (isset($_GET['izbrisi_id'])) {
    $id = $_GET['izbrisi_id'];
    $sql = "DELETE FROM stranke WHERE id = ?";
    $stmt = $povezava->prepare($sql);
    $stmt->execute([$id]);
    
    header("Location: admin.php");
    exit;
}

// updejt
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uredi_id'])) {
    $id = $_POST['uredi_id'];
    $telefon = $_POST['nov_telefon'];
    $datum = $_POST['nov_datum'];
    
    $sql_telefon = "UPDATE stranke SET telefon = ? WHERE id = ?";
    $povezava->prepare($sql_telefon)->execute([$telefon, $id]);

    $sql_datum = "UPDATE termini SET datum_termina = ? WHERE stranka_id = ?";
    $stmt_datum = $povezava->prepare($sql_datum);
    $stmt_datum->execute([$datum, $id]);
    
    // Če ni termina, ga vstavimo
    if ($stmt_datum->rowCount() == 0 && !empty($datum)) {
        $sql_insert = "INSERT INTO termini (stranka_id, datum_termina) VALUES (?, ?)";
        $povezava->prepare($sql_insert)->execute([$id, $datum]);
    }
    
    header("Location: admin.php");
    exit;
}

// select
$sql = "SELECT s.id, s.ime_priimek, s.email, s.telefon, t.datum_termina, sp.vsebina 
        FROM stranke s 
        LEFT JOIN termini t ON s.id = t.stranka_id 
        LEFT JOIN sporocila sp ON s.id = sp.stranka_id 
        ORDER BY s.id DESC";
$povprasevanja = $povezava->query($sql)->fetchAll();
?>

<!doctype html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="padding: 2rem;">
    <h1>Prejeta povpraševanja</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; text-align:left;">
        <tr>
            <th>Ime in priimek</th>
            <th>Email</th>
            <th>Sporočilo</th>
            <th>Hitro urejanje (Telefon in Termin)</th>
            <th>Akcija</th>
        </tr>
        <?php foreach ($povprasevanja as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['ime_priimek']) ?></td>
            <td><?= htmlspecialchars($p['email']) ?></td>
            <td><?= htmlspecialchars($p['vsebina'] ?? 'Brez sporočila') ?></td>
            <td>
                <form method="POST" style="display:flex; flex-direction:column; gap: 5px;">
                    <input type="hidden" name="uredi_id" value="<?= $p['id'] ?>">
                    
                    <label style="font-size: 12px; margin-bottom: -5px;">Telefon:</label>
                    <input type="text" name="nov_telefon" value="<?= htmlspecialchars($p['telefon'] ?? '') ?>" style="width: 150px;">
                    
                    <label style="font-size: 12px; margin-bottom: -5px;">Datum termina:</label>
                    <input type="date" name="nov_datum" value="<?= htmlspecialchars($p['datum_termina'] ?? '') ?>" style="width: 150px;">
                    
                    <button type="submit" style="width: 150px;">Shrani popravke</button>
                </form>
            </td>
            <td style="text-align: center;">
                <a href="admin.php?izbrisi_id=<?= $p['id'] ?>" onclick="return confirm('Zagotovo izbrišem?')" style="color: red; font-weight: bold;">Izbriši</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>