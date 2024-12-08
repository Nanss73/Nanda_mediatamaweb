<?php
$host = 'localhost';
$dbname = 'db_123';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $author_id = $_POST['author_id'];

    if (empty($judul) || empty($konten) || empty($author_id)) {
        die("Semua data harus diisi!");
    }

    $sql = "INSERT INTO artikel (judul, konten, author_id) VALUES (:judul, :konten, :author_id)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':judul', $judul);
    $stmt->bindParam(':konten', $konten);
    $stmt->bindParam(':author_id', $author_id);

    $stmt->execute();

    echo "Data berhasil disimpan! <a href='input.php'>Kembali ke form</a>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>