<?php
	session_start();
?>

<h3>Lihat data</h3>
<table border="1">
	<tr>
		<th>NIM</th> <th>Nama</th> <th colspan="2">ACTION</th>
	</tr>
	<?php 
		include "koneksi.php";
		$query = mysqli_query($conn, "SELECT * FROM mahasiswa");
		while ($data = mysqli_fetch_array($query)){
			echo "<tr>
					<td>".$data['nim']."</td> <td>".$data['nama']."</td>";
			echo "  <td><a href='formupdate.php?nim=".$data['nim']."'>update</a></td>";
			echo "  <td><a href='del.php?nim=".$data['nim']."'>delete</a></td>
				  </tr>";
		}
	 ?>
</table>
<a href="formdaftar.php">daftar</a>
<a href="logout.php">logout</a>