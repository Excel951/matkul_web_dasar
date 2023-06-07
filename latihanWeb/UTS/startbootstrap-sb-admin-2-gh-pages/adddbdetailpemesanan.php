<?php
include './connection.php';

$data = json_decode(file_get_contents('php://input'), true);

$kodepem = $data['kodepem'];
$kodebr = $data['kodebr'];
$hargabeli = $data['hargabeli'];
$jumlah = $data['jumlah'];

$querySQL = "insert into detailpemesanan values (?,?,?,?)";
$statement = $conn->prepare($querySQL);
$statement->bind_param('ssdd', $kodepem, $kodebr, $hargabeli, $jumlah);
$statement->execute();
