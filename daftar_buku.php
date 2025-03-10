<?php
include 'koneksi.php';

$sql = "SELECT * FROM table_buku";
$result = $conn->query($sql);
    

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Judul: " . $row["judul"]
        . " - Penulis: " . $row["penulis"] .
        " - Penerbit: " . $row["penerbit"] . " - Tahun Terbit: " . $row["tahun_terbit"] . "<br>";
    }
} else {
    echo "Tidak ada buku.";
}
?>