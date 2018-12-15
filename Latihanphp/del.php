<?php 
	include "koneksi.php";
	$query = mysqli_query($conn, "delete from mahasiswa where nim='".$_GET["nim"]."'");
	if ($query) echo "data berhasil di hapus";
	else echo "data gagal dihapus";
	echo "<br><br><a href='view.php'>lihat data</a>";
 ?>
