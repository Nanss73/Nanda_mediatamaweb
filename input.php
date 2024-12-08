<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Input Data</h1>
    <form action="proses_input.php" method="post">
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" required><br><br>
        
        <label for="konten">Konten:</label><br>
        <textarea id="konten" name="konten" rows="5" required></textarea><br><br>
        
        <label for="author_id">Author ID:</label><br>
        <input type="number" id="author_id" name="author_id" required><br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>