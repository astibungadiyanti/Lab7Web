
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 1 - Nilai Rata-rata</title>
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
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        button {
            background: #2563eb;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hitung Nilai Rata-rata</h2>

    <form method="POST">
        <input type="number" name="tugas"
               placeholder="Nilai Tugas" min="0" max="100" required>

        <input type="number" name="uts"
               placeholder="Nilai UTS" min="0" max="100" required>

        <input type="number" name="uas"
               placeholder="Nilai UAS" min="0" max="100" required>

        <button type="submit">Hitung Rata-rata</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        if (
            !is_numeric($tugas) ||
            !is_numeric($uts) ||
            !is_numeric($uas) ||
            $tugas < 0 || $tugas > 100 ||
            $uts < 0 || $uts > 100 ||
            $uas < 0 || $uas > 100
        ) {
            echo "<p>Nilai harus antara 0 sampai 100.</p>";
        } else {
            $rataRata = ($tugas + $uts + $uas) / 3;

            echo "<h3>Hasil Rata-rata: " .
                 number_format($rataRata, 2) .
                 "</h3>";
        }
    }
    ?>
</div>

</body>
</html>