<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_123", "root", "");

    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tag_ids = $_POST['tag_id'];

    $sql = "INSERT INTO artikel (judul, konten) VALUES (:judul, :konten)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':judul', $judul);
    $stmt->bindParam(':konten', $konten);
    $stmt->execute();

    $artikel_id = $pdo->lastInsertId();

    $sql_tag = "INSERT INTO artikel_tag (artikel_id, tag_id) VALUES (:artikel_id, :tag_id)";
    $stmt_tag = $pdo->prepare($sql_tag);

    foreach ($tag_ids as $tag_id) {
        $stmt_tag->bindParam(':artikel_id', $artikel_id);
        $stmt_tag->bindParam(':tag_id', $tag_id);
        $stmt_tag->execute();
    }

    echo "Artikel dengan tag berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>