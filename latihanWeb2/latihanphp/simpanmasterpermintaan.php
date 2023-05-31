<?php
include 'koneksi.php';
$kodeper= $_POST['kodeper'] ;
$tanggal= $_POST['tanggal'] ;
$konsumen= $_POST['kkonsumen'] ;
$telp=$_POST['telp'] ;
$alamat= $_POST['alamat'] ;  
$keterangan= $_POST['keterangan'] ; 
$karyawan= $_POST['karyawan'] ;
$total= $_POST['total'] ; 
$sql = "insert into masterpermintaan values
('$kodeper','$tanggal','$konsumen','$telp','$alamat','$keterangan','$karyawan',$total)";
mysqli_query($conn,$sql);

?>


