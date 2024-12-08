<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Artikel</title>
</head>
<body>
    <h1>Tambah Artikel</h1>
    <form action="proses_input_artikel.php" method="post">
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" required><br><br>

        <label for="konten">Konten:</label><br>
        <textarea id="konten" name="konten" rows="5" required></textarea><br><br>

        <label for="kategori">Kategori:</label><br>
        <select id="kategori" name="kategori_id" required>
            <?php
            $pdo = new PDO("mysql:host=localhost;dbname=db_123", "root", "");
            $stmt = $pdo->query("SELECT * FROM kategori");
            while ($row = $stmt->fetch()) {
                echo "<option value='{$row['id']}'>{$row['nama_kategori']}</option>";
            }
            ?>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>