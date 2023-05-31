<?php
include 'koneksi.php';
$kodeper= $_POST['kodeper'] ;
$kodebr= $_POST['kodebr'] ;
$hargajual= $_POST['hargajual'] ;
$jumlah=$_POST['jumlah'] ;

$sql = "insert into detailpermintaan values
('$kodeper','$kodebr',$hargajual,$jumlah)";
mysqli_query($conn,$sql);

?>
