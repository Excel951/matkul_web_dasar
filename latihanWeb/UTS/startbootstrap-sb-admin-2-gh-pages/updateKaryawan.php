<?php
include "./connection.php";

$kode=$_POST["kode"];
$nama=$_POST["nama"];
$jabatan=$_POST["jabatan"];
$telepon=$_POST["telepon"];
$email=$_POST["email"];
$password=$_POST["password"];

$querySQL="update karyawan set nama='$nama', jabatan='$jabatan', telepon='$telepon', email='$email', password='$password' where kode_karyawan='$kode'";
mysqli_query($conn,$querySQL);
