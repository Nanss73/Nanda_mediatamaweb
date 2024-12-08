<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        .button-container {
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Menu Utama</h1>
    <div class="button-container">
        <form action="input.php" method="get">
            <button type="submit">Input Data</button>
        </form>
        <form action="lihat.php" method="get">
            <button type="submit">Lihat Data</button>
        </form>
        <form action="hapus.php" method="get">
            <button type="submit">Hapus Data</button>
        </form>
        <form action="perbarui.php" method="get">
            <button type="submit">Perbarui Data</button>
        </form>
    </div>
</body>
</html>