<?php
$host = 'localhost';
$dbname = 'db_123';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];

    if (empty($id)) {
        die("ID tidak boleh kosong!");
    }

    $sql = "DELETE FROM artikel WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Data dengan ID $id berhasil dihapus! <a href='hapus.php'>Kembali</a>";
    } else {
        echo "Data dengan ID $id tidak ditemukan. <a href='hapus.php'>Kembali</a>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>