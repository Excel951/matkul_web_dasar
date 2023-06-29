<?php
include './connection.php';

$data = json_decode(file_get_contents('php://input'), true);

for ($i = 0; $i < count($data); $i++) {
    $row = $data[$i];

    $kodeper = $row['kodeper'];
    $kodebr = $row['kodebr'];
    $hargajual = $row['hargajual'];
    $jumlah = $row['jumlah'];

    $querySQL = "insert into detailpermintaan values (?,?,?,?)";
    $statement = $conn->prepare($querySQL);
    $statement->bind_param('ssdd', $kodeper, $kodebr, $hargajual, $jumlah);
    $statement->execute();
}
