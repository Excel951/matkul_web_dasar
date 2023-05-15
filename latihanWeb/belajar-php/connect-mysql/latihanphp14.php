<?php
include "./latihanphp13.php";

$sql="select * from barang";
$hasil=mysqli_query($conn,$sql);

print_r($hasil);


?>