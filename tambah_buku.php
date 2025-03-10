<?php
include 'koneksi.php';


if (isset($_POST['submit'])) {
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];


$sql = "INSERT INTO tabel_buku (judul, penulis, penerbit, tahun_terbit)
VALUES	('$judul',	'$penulis',	'$penerbit', '$tahun_terbit')";


if ($conn->query($sql) === TRUE) { echo "Buku berhasil ditambahkan";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>


<form method="post">
Judul Buku: <input type="text" name="judul" required><br> 
Penulis: <input type="text" name="penulis" required><br> 
    Penerbit: <input type="text" name="penerbit"><br>
Tahun Terbit: <input type="number" name="tahun_terbit"><br>
<input type="submit" name="submit" value="Tambah Buku">
</form>