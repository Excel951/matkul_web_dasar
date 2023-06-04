<?php
include './connection.php';

$data = json_decode(file_get_contents('php://input'), true);

$kodeper = $data['kodeper'];
$kodebr = $data['kodebr'];
$hargajual = $data['hargajual'];
$jumlah = $data['jumlah'];

$querySQL = "insert into detailpermintaan values (?,?,?,?)";
$statement = $conn->prepare($querySQL);
$statement->bind_param('ssdd', $kodeper, $kodebr, $hargajual, $jumlah);
$statement->execute();
