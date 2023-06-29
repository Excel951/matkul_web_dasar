<?php
include './connection.php';

$data = json_decode(file_get_contents('php://input'), true);

for ($i = 0; $i < count($data); $i++) {
    $row = $data[$i];

    $kodepem = $row["kodepem"];
    $kodebr = $row["kodebr"];
    $hargabeli = $row["hargabeli"];
    $jumlah = $row["jumlah"];

    // echo $kodepem, $hargabeli, $jumlah, $kodebr;
    $querySQL = "insert into detailpemesanan values (?,?,?,?)";
    $statement = $conn->prepare($querySQL);
    $statement->bind_param('ssdd', $kodepem, $kodebr, $hargabeli, $jumlah);
    $statement->execute();
}
