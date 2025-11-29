<?php
require_once __DIR__ . "/classes/Pokemon.php";
require_once __DIR__ . "/classes/Psyduck.php";
session_start();

$riwayat = $_SESSION['riwayat'] ?? [];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Latihan Psyduck</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Riwayat Latihan Psyduck</h1>

<?php if (empty($riwayat)): ?>
    <p>Belum ada riwayat latihan.</p>
<?php else: ?>

<div class="table-container">
<table cellpadding="10">
    <tr>
        <th>Jenis</th>
        <th>Intensitas</th>
        <th>Level</th>
        <th>HP</th>
        <th>Waktu</th>
    </tr>

    <?php foreach ($riwayat as $r): ?>
    <tr>
        <td><?= $r['jenis'] ?? '-' ?></td>
        <td><?= $r['intensitas'] ?? '-' ?></td>

        <td>
            <?= ($r['before']['level'] ?? '-') . " → " . ($r['after']['level'] ?? '-') ?>
        </td>

        <td>
            <?= ($r['before']['hp'] ?? '-') . " → " . ($r['after']['hp'] ?? '-') ?>
        </td>

        <td><?= $r['time'] ?? '-' ?></td>
    </tr>
    <?php endforeach; ?>

</table>
</div>

<?php endif; ?>

<a class="btn" href="index.php">Kembali</a>

</body>
</html>
