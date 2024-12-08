<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Artikel dengan Tag</title>
</head>
<body>
    <h1>Tambah Artikel dengan Tag</h1>
    <form action="proses_input_artikel_tag.php" method="post">
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" required><br><br>

        <label for="konten">Konten:</label><br>
        <textarea id="konten" name="konten" rows="5" required></textarea><br><br>

        <label for="tag">Pilih Tag:</label><br>
        <?php
        $pdo = new PDO("mysql:host=localhost;dbname=db_123", "root", "");
        $stmt = $pdo->query("SELECT * FROM tag");
        while ($row = $stmt->fetch()) {
            echo "<input type='checkbox' name='tag_id[]' value='{$row['id']}'> {$row['nama_tag']}<br>";
        }
        ?>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>