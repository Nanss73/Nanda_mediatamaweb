<?php
$host = 'localhost';
$dbname = 'db_123';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM artikel";
    $stmt = $pdo->query($sql);

    echo "<h1>Data Posts</h1>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>NO</th><th>Judul</th><th>Konten</th><th>Author ID</th>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['judul']}</td>";
        echo "<td>{$row['konten']}</td>";
        echo "<td>{$row['author_id']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>