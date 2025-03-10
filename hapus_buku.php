<h4> buku telah di hapus</h4>

<?php

include 'koneksi.php';

if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $sql = "DELETE FROM table_buku WHERE id = $id";

 if ($conn->query($sql) === TRUE) {
    echo "Buku berhasil dihapus";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
?>