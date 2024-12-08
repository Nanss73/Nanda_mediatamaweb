<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
</head>
<body>
    <h1>Hapus Data</h1>
    <form action="proses_hapus.php" method="post">
        <label for="id">ID yang akan dihapus:</label><br>
        <input type="number" id="id" name="id" required><br><br>
        <button type="submit">Hapus</button>
    </form>
</body>
</html>