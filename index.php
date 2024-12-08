<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        h1 {
            color: #333;
        }
        .menu {
            margin-top: 20px;
        }
        .menu a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 5px;
            color: white;
            background-color: #007BFF;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Aplikasi CRUD</h1>
    <p>Silakan pilih salah satu menu di bawah untuk mengelola data.</p>
    <div class="menu">
        <a href="input.php">Tambah Data</a>
        <a href="lihat.php">Lihat Data</a>
        <a href="hapus.php">Hapus Data</a>
        <a href="perbarui.php">Perbarui Data</a>
    </div>
</body>
</html>