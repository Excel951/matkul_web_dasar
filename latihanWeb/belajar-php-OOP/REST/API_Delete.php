<?php
function deleteBarang()
{
    require_once './Connection_API.php';

    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $kode = $data["kode"];

    $querySQL = "DELETE FROM BARANG WHERE kode_barang='$kode'";

    $result = mysqli_query($conn, $querySQL);

    if (mysqli_affected_rows($conn) > 0) {
        $responseDelete = array(
            'status' => '200',
            'message' => 'Success Delete Barang',
            'data' => $result
        );
    } else {
        $responseDelete = array(
            'status' => '500',
            'message' => 'Failed to Delete Barang',
            'data' => null
        );
    }

    header("Content-Type: application/json");
    echo json_encode($responseDelete);
}
