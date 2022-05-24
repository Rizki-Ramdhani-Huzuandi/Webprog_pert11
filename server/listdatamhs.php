<?php 
	include_once("koneksi.php");
	$sql = "SELECT Nim,Nama,Jkel FROM mhs;";
	$hsl = mysqli_query($cnn,$sql);

	/*while ($row = mysqli_fetch_array($hsl)) {
		echo "Nim:".$row["Nim"];
		echo "Nama:".$row["Nama"];
		echo "Jkel:".$row["Jkel"];
		echo "<br";
	}*/

	$row = mysqli_fetch_all($row);
		echo json_decode($row);