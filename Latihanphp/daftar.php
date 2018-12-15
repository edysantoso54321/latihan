<?php 
	include ("koneksi.php");
	$query = mysqli_query($conn,"Insert Into mahasiswa (nim,nama) values ('".$_POST["nim"]."','".$_POST["nama"]."')");
	if ($query) echo "data berhasil disimpan";
	else echo "data gagal disimpan";
	echo "<br><br><a href='view.php'>Lihat data</a>";
 ?>
