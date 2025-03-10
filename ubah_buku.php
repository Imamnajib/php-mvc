<?php
include 'koneksi.php';


if (isset($_GET['id'])) {
$id = $_GET['id'];


// Ambil data buku yang ingin diubah
$sql= "SELECT * FROM table_buku WHERE id = $id";

    $result = $conn->query($sql);
    $book = $result->fetch_assoc();
}


if (isset($_POST['submit'])) {
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];


// Update data buku
$sql = "UPDATE table_buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
     echo "Buku berhasil diubah";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<form method="post">
    Judul  Buku:  <input  type="text"  name="judul"  value="<?=
$book['judul'] ?>" required><br>

    Penulis:    <input	type="text"	name="penulis"	value="<?=
$book['penulis'] ?>" required><br>

    Penerbit:  <input  type="text"  name="penerbit"  value="<?=
$book['penerbit'] ?>"><br>

    Tahun Terbit:<input	type="number"	name="tahun_terbit" 
        value="<?= $book['tahun_terbit'] ?>"><br>
        
<input type="submit" name="submit" value="hapus Buku">
</form>



