<?php
include './connection.php';

$kode=$_POST['kode'];

$querySQL="delete from karyawan where kode_karyawan='$kode'";
mysqli_query($conn,$querySQL);
