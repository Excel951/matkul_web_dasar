<?php
include './connection.php';
$kodebrg = $_POST['kode'];
$namabrg = $_POST['nama'];
$satuan = $_POST['satuan'];
$hargabeli = $_POST['hargabeli'];
$hargajual = $_POST['hargajual'];

$sql = "update barang set nama_barang='$namabrg', satuan='$satuan', harga=$hargabeli ,harga_jual=$hargajual where kode_barang='" . $kodebrg . "'";

mysqli_query($conn, $sql);
