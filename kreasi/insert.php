<?php
	require_once "conn.php";
	
	#data yang diperoleh dari method POST
	$nim = $_POST["nim"]; #data yang dikirim menggunakan method POST
	//$nim = "30390100005"; #input manual
	$nama = $_POST["nama"]; #data yang dikirim menggunakan method POST
	//$nama = "Edo"; #input manual
	
	#query utk menampilkan data mahasiswa
	$sql = "INSERT INTO mahasiswa(nim, nama) VALUES ('$nim','$nama')";
	
	#eksekusi query
	$result = $conn -> query($sql);
	
	#cek jika data dan query berhasil disimpan
	if ($result)
		echo "Tersimpan";
	else
		echo "Gagal Simpan";
?>