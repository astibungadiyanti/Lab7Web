
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 - Function</title>
    <style>
        body {
            font-family: Arial;
            background: #f1f5f9;
            padding: 40px;
        }
        .container {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
        }
        h2 { color: #2563eb; }
    </style>
</head>
<body>

<div class="container">
    <h2>Menghitung Diskon</h2>

    <?php
        function hitungDiskon($harga, $persen) {
            $potongan = $harga * ($persen / 100);
            return $harga - $potongan;
        }

        function hitungLuas($panjang, $lebar) {
            return $panjang * $lebar;
        }

        $hargaAwal = 150000;
        $diskon = 10;

        $hargaAkhir = hitungDiskon($hargaAwal, $diskon);
        $luas = hitungLuas(8, 4);

        echo "Harga awal: Rp" .
             number_format($hargaAwal, 0, ",", ".") .
             "<br>";

        echo "Diskon: $diskon% <br>";

        echo "Harga setelah diskon: Rp" .
             number_format($hargaAkhir, 0, ",", ".") .
             "<br>";

        echo "Luas persegi panjang: $luas";
    ?>

</div>

</body>
</html>