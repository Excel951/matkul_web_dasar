<?php
function viewBarang()
{
    require_once './Connection_API.php';

    $querySQL = "SELECT * FROM BARANG";

    $result = mysqli_query($conn, $querySQL);

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    $responseView = array(
        'status' => '200',
        'message' => 'Success get data of barang',
        'data' => $rows
    );

    header("Content-Type: application/json");
    echo json_encode($responseView);
}
