
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Reset</title>
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
            margin-top: 12px;
            box-sizing: border-box;
        }
        button {
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .kirim {
            background: #2563eb;
            color: white;
        }
        .reset {
            background: #dc2626;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Data Mahasiswa</h2>

    <form method="POST">

        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Program Studi:</label>
        <input type="text" name="prodi" required>

        <button type="submit" class="kirim">
            Kirim Data
        </button>

        <button type="reset" class="reset">
            Reset Form
        </button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nama = trim($_POST["nama"] ?? "");
        $prodi = trim($_POST["prodi"] ?? "");

        if ($nama === "" || $prodi === "") {
            echo "<p>Semua kolom wajib diisi.</p>";
        } else {
            echo "<h3>Data Berhasil Dikirim</h3>";
            echo "Nama: " .
                 htmlspecialchars($nama, ENT_QUOTES, "UTF-8") .
                 "<br>";

            echo "Program Studi: " .
                 htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
        }
    }
    ?>

</div>

</body>
</html>