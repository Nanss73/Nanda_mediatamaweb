<?php
$host = 'localhost';
$dbname = 'db_123';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $author_id = $_POST['author_id'];

    if (empty($id)) {
        die("ID artikel harus diisi!");
    }

    $update_fields = [];
    if (!empty($judul)) {
        $update_fields[] = "judul = :judul";
    }
    if (!empty($konten)) {
        $update_fields[] = "konten = :konten";
    }
    if (!empty($author_id)) {
        $update_fields[] = "author_id = :author_id";
    }
i
    if (empty($update_fields)) {
        die("Tidak ada data yang diperbarui!");
    }

    $set_clause = implode(", ", $update_fields);

    $sql = "UPDATE artikel SET $set_clause WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    if (!empty($judul)) {
        $stmt->bindParam(':judul', $judul);
    }
    if (!empty($konten)) {
        $stmt->bindParam(':konten', $konten);
    }
    if (!empty($author_id)) {
        $stmt->bindParam(':author_id', $author_id);
    }

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Data dengan ID $id berhasil diperbarui! <a href='perbarui.php'>Kembali</a>";
    } else {
        echo "Tidak ada perubahan yang dilakukan atau ID tidak ditemukan. <a href='perbarui.php'>Kembali</a>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>