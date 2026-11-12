
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Format Rupiah</title>
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
    </style>
</head>
<body>

<div class="container">
    <h2>Format Harga Rupiah</h2>

    <?php
    function formatRupiah($harga) {
        return "Rp" . number_format($harga, 0, ",", ".");
    }

    $harga1 = 150000;
    $harga2 = 250000;
    $harga3 = 50000;

    echo "Harga pertama: " . formatRupiah($harga1) . "<br><br>";
    echo "Harga kedua: " . formatRupiah($harga2) . "<br><br>";
    echo "Harga ketiga: " . formatRupiah($harga3);
    ?>

</div>

</body>
</html>