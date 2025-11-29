<?php
require_once __DIR__ . "/classes/Pokemon.php";
require_once __DIR__ . "/classes/Psyduck.php";
session_start();

if (!isset($_SESSION['pokemon'])) {
    $_SESSION['pokemon'] = new Psyduck();
}

$poke = $_SESSION['pokemon'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>PokéCare - Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>PokéCare</h1>

<div class="card">
    <img src="assets/psyduck.png" class="poke-img">

    <h2><?= $poke->getName(); ?></h2>
    <p><b>Type:</b> <?= $poke->getType(); ?></p>
    <p><b>Level:</b> <?= $poke->getLevel(); ?></p>
    <p><b>HP:</b> <?= $poke->getHP(); ?></p>

    <p><b>Attack:</b> <?= $poke->getAttack(); ?></p>
    <p><b>Defense:</b> <?= $poke->getDefense(); ?></p>
    <p><b>Speed:</b> <?= $poke->getSpeed(); ?></p>

    <p><b>Special Move:</b> <?= $poke->getSpecialMove(); ?></p>

    <a class="btn" href="latihan.php">Mulai Latihan</a>
    <a class="btn" href="riwayat.php">Riwayat Latihan</a>
</div>

</body>
</html>
