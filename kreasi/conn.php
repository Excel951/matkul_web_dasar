<?php
	#Yang dibutuhkan 4 hal ini
	#server, username, password, database
	
	#deklarasi
	$host = "127.0.0.1"; #server
	$user = "root"; #username
	$pass = ""; #password
	$db = "akademik"; #database
	
	#koneksi
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	#cek koneksi apakah berhasil atau tidak
	if ($conn->connect_error)
		die ("Koneksi Gagal karena " . $conn -> connect_error); #pesan error akan muncul di $conn -> connect_error
	else
		//echo "Koneksi Berhasil";
?>