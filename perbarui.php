<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbarui Data</title>
</head>
<body>
    <h1>Perbarui Data</h1>
    <form action="proses_perbarui.php" method="post">
        <label for="id">ID yang akan diperbarui:</label><br>
        <input type="number" id="id" name="id" required><br><br>
        
        <label for="judul">Judul Baru:</label><br>
        <input type="text" id="judul" name="judul"><br><br>
        
        <label for="konten">Konten Baru:</label><br>
        <textarea id="konten" name="konten" rows="5"></textarea><br><br>
        
        <label for="author_id">Author ID Baru:</label><br>
        <input type="number" id="author_id" name="author_id"><br><br>
        
        <button type="submit">Perbarui</button>
    </form>
</body>
</html>