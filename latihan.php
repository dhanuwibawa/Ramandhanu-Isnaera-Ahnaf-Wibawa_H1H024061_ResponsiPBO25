<?php
require_once __DIR__ . "/classes/Pokemon.php";
require_once __DIR__ . "/classes/Psyduck.php";
session_start();

if (!isset($_SESSION['pokemon'])) {
    $_SESSION['pokemon'] = new Psyduck();
}

$poke = $_SESSION['pokemon'];
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $jenis = $_POST['jenis'];
    $intensitas = intval($_POST['intensitas']);

    $result = $poke->train($jenis, $intensitas);

    $_SESSION['pokemon'] = $poke;

    if (!isset($_SESSION['riwayat'])) {
        $_SESSION['riwayat'] = [];
    }

    $_SESSION['riwayat'][] = $result;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Psyduck</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Latihan Psyduck</h1>

<form method="POST" class="form">
    <label>Jenis Latihan:</label>
    <select name="jenis">
        <option>Attack</option>
        <option>Defense</option>
        <option>Speed</option>
    </select>

    <label>Intensitas:</label>
    <input type="number" name="intensitas" required>

    <button class="btn" type="submit">Mulai Latihan</button>
</form>

<?php if ($result): ?>
<div class="card">

    <h3>Hasil Latihan</h3>

    <p><b>Level:</b> <?= $result['before']['level'] ?> → <?= $result['after']['level'] ?></p>
    <p><b>HP:</b> <?= $result['before']['hp'] ?> → <?= $result['after']['hp'] ?></p>

    <p><b>Attack:</b> <?= $result['before']['attack'] ?> → <?= $result['after']['attack'] ?></p>
    <p><b>Defense:</b> <?= $result['before']['defense'] ?> → <?= $result['after']['defense'] ?></p>
    <p><b>Speed:</b> <?= $result['before']['speed'] ?> → <?= $result['after']['speed'] ?></p>

    <?php if (isset($result['note'])): ?>
        <p><i><?= $result['note'] ?></i></p>
    <?php endif; ?>

    <p><?= $result['special'] ?></p>

</div>
<?php endif; ?>

<a class="btn" href="index.php">Kembali</a>
<a class="btn" href="riwayat.php">Lihat Riwayat</a>

</body>
</html>
