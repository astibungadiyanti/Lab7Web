
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 7 - Transaksi Barang</title>
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
        input {
            width: 95%;
            padding: 10px;
            margin: 8px 0 15px;
        }
        button {
            background: #2563eb;
            color: white;
            padding: 11px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .hasil {
            background: #dcfce7;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Transaksi Barang</h2>

    <form method="POST">
        <label>Nama Barang</label>
        <input type="text" name="barang" required>

        <label>Harga Barang</label>
        <input type="number" name="harga"
               min="0" step="0.01" required>

        <label>Jumlah Barang</label>
        <input type="number" name="jumlah"
               min="1" step="1" required>

        <button type="submit">Hitung Total</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $barang = trim($_POST["barang"] ?? "");
            $hargaInput = $_POST["harga"] ?? "";
            $jumlahInput = $_POST["jumlah"] ?? "";

            if (
                $barang === "" ||
                !is_numeric($hargaInput) ||
                !ctype_digit((string)$jumlahInput) ||
                (float)$hargaInput < 0 ||
                (int)$jumlahInput < 1
            ) {
                echo "<p class='error'>";
                echo "Periksa kembali data barang!";
                echo "</p>";

            } else {

                $harga = (float)$hargaInput;
                $jumlah = (int)$jumlahInput;
                $subtotal = $harga * $jumlah;

                echo "<div class='hasil'>";
                echo "<h3>Ringkasan Transaksi</h3>";

                echo "Nama Barang: " .
                     htmlspecialchars($barang, ENT_QUOTES, "UTF-8") .
                     "<br>";

                echo "Harga: Rp" .
                     number_format($harga, 0, ",", ".") .
                     "<br>";

                echo "Jumlah: $jumlah <br>";

                echo "<strong>Subtotal: Rp" .
                     number_format($subtotal, 0, ",", ".") .
                     "</strong>";

                echo "</div>";
            }
        }
    ?>

</div>

</body>
</html>