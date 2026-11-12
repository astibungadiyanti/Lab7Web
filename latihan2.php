
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Nilai Mahasiswa</title>
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
    <h2>Hasil Nilai Mahasiswa</h2>

    <?php
        $nama = "Siti";
        $tugas = 85;
        $uts = 78;
        $uas = 90;

        $nilaiAkhir = ($tugas * 0.30) +
                      ($uts * 0.30) +
                      ($uas * 0.40);

        if ($nilaiAkhir >= 85) {
            $predikat = "A";
        } elseif ($nilaiAkhir >= 75) {
            $predikat = "B";
        } elseif ($nilaiAkhir >= 60) {
            $predikat = "C";
        } else {
            $predikat = "D";
        }

        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Nilai Tugas: $tugas <br>";
        echo "Nilai UTS: $uts <br>";
        echo "Nilai UAS: $uas <br>";
        echo "Nilai Akhir: " .
             number_format($nilaiAkhir, 2) . "<br>";
        echo "Predikat: $predikat";
    ?>

</div>

</body>
</html>