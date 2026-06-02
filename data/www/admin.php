<?php
require_once 'baza.php';

// delete
if (isset($_GET['izbrisi_id'])) {
    $id_za_brisanje = $_GET['izbrisi_id'];
    // ker imamo on delete cascade, izbris stranke pobriše termine in sporočila
    $sql_del = "DELETE FROM stranke WHERE id = ?";
    $stmt_del = $povezava->prepare($sql_del);
    $stmt_del->execute([$id_za_brisanje]);
    header("Location: admin.php"); // osveži stran
    exit;
}

// updejt - popravek vseh podatkov stranke
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uredi_id'])) {
    $id = $_POST['uredi_id'];
    $novo_ime = $_POST['novo_ime'];
    $nov_email = $_POST['nov_email'];
    $nov_telefon = $_POST['nov_telefon'];
    
    // posodobimo ime_priimek, email in telefon v tabeli stranke
    $sql_upd = "UPDATE stranke SET ime_priimek = ?, email = ?, telefon = ? WHERE id = ?";
    $stmt_upd = $povezava->prepare($sql_upd);
    $stmt_upd->execute([$novo_ime, $nov_email, $nov_telefon, $id]);
}

// select združimo vse tri tabele z uporabo LEFT JOIN
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
            <th>Želen termin</th>
            <th>Sporočilo</th>
            <th>Telefon (Uredi)</th>
            <th>Akcija</th>
        </tr>
        <?php foreach ($povprasevanja as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['ime_priimek']) ?></td>
            <td><?= htmlspecialchars($p['email']) ?></td>
            <td><?= htmlspecialchars($p['datum_termina'] ?? 'Ni izbrano') ?></td>
            <td><?= htmlspecialchars($p['vsebina'] ?? 'Brez sporočila') ?></td>
            <td>
                <form method="POST" style="display:flex; gap: 5px;">
                    <input type="hidden" name="uredi_id" value="<?= $p['id'] ?>">
                    <input type="text" name="nov_telefon" value="<?= htmlspecialchars($p['telefon']) ?>" style="width: 100px;">
                    <button type="submit">Shrani</button>
                </form>
            </td>
            <td>
                <a href="admin.php?izbrisi_id=<?= $p['id'] ?>" onclick="return confirm('Zagotovo izbrišem?')" style="color: red; font-weight: bold;">Izbriši</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>