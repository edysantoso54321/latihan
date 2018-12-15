<form method="post" action="update.php">
	<?php 
		include ("koneksi.php");
		$query = mysqli_query($conn, "select from mahasiswa where nim='".$_GET["nim"]."'");
		if ($data = mysqli_fetch_array($query)) echo "ada";
		else echo "ga ada <br>";
		echo "Nama : <input type='text' name='nim' value=".$data["nim"]."><br>
			  NIM : <input type='text' name='nama' value=".$data["nama"]."><br>
			  <input type='submit' name='update'>";
	 ?>
</form> <br><br>
<a href="view.php">Lihat data</a>
