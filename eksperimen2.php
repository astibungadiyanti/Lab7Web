
<?php
$mahasiswa = [
    "Alya",
    "Bima",
    "Citra",
    "Doni",
    "Eka",
    "Fajar"
];

$hasil = null;

if (isset($_GET["nama"])) {

    $cari = trim($_GET["nama"]);

    foreach ($mahasiswa as $nama) {
        if (strcasecmp($nama, $cari) === 0) {
            $hasil = $nama;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
            background: #f1f5f9;
            padding: 40px;
        }
        .container {
            max-width: 450px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
        }
        input, button {
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Cari Mahasiswa</h2>

    <form method="GET">
        <input type="text" name="nama"
               placeholder="Masukkan nama mahasiswa" required>

        <button type="submit">Cari</button>
    </form>

    <?php if (isset($_GET["nama"])): ?>

        <?php if ($hasil !== null): ?>
            <p>Mahasiswa ditemukan: <?= htmlspecialchars($hasil) ?></p>
        <?php else: ?>
            <p>Nama mahasiswa tidak ditemukan.</p>
        <?php endif; ?>

    <?php endif; ?>

    <h3>Daftar Nama:</h3>

    <ul>
        <?php foreach ($mahasiswa as $nama): ?>
            <li><?= htmlspecialchars($nama) ?></li>
        <?php endforeach; ?>
    </ul>

</div>

</body>
</html>