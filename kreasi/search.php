<?php
	require_once "conn.php";
	
	#data yang diambil dari method GET untuk testing
	//$nim = $_GET["nim"]; #data yang dikirim menggunakan method GET
	#data yang diambil dari method POST
	$nim = $_POST["nim"]; #data yang dikirim menggunakan method GET
	
	
	#query utk menampilkan data mahasiswa
	$sql = "SELECT * FROM mahasiswa where nim like '%$nim%'";
	
	#eksekusi query
	$result = $conn -> query($sql);
	
	#cek jika data ada, gunakan num_rows
	if ($result -> num_rows > 0) #jika num_rows > 0, berarti ada
	{
		while($row = $result->fetch_assoc())
		{
			$array_mahasiswa [] = $row;
		}
	}
	$data =  json_encode($array_mahasiswa) ;
	
	echo "{\"mahasiswa\":" . $data . "}";
?>