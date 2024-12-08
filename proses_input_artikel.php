<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_123", "root", "");

    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $kategori_id = $_POST['kategori_id'];

    $sql = "INSERT INTO artikel (judul, konten, kategori_id) VALUES (:judul, :konten, :kategori_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':judul', $judul);
    $stmt->bindParam(':konten', $konten);
    $stmt->bindParam(':kategori_id', $kategori_id);

    $stmt->execute();
    echo "Artikel berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>