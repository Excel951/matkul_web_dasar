<?php
	require_once "conn.php";
	
	#data yang diperoleh dari method POST
	$nim = $_POST["nim"]; #data yang dikirim menggunakan method POST
	//$nim = "30390100005"; #input manual
	$nama = $_POST["nama"]; #data yang dikirim menggunakan method POST
	//$nama = "Edo Yonatan K."; #input manual
	
	#query utk menampilkan data mahasiswa
	$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
	
	#eksekusi query
	$result = $conn -> query($sql);
	
	#cek jika data ada, gunakan num_rows
	if ($result -> num_rows > 0) #jika num_rows > 0, berarti ada
	{
		#query utk mengubah data mahasiswa
		$sql = "UPDATE mahasiswa SET nama = '$nama' WHERE nim = '$nim'";
		
		#eksekusi query
		$result = $conn -> query($sql);
		
		#info query berhasil diubah
		echo "Update";
	}
	else
	{
		echo "Gagal Update";
	}
	
	
	
?>