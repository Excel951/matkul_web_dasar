<?php
function selectiveView()
{
    require_once './Connection_API.php';

    // $json = file_get_contents('php://input');
    // $data = json_decode($json, true);

    $kode = $_GET["kode"];

    $querySQL = "SELECT * FROM BARANG WHERE kode_barang='$kode'";

    $result = mysqli_query($conn, $querySQL);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data = $row;
        }
        $responseSelect = array(
            'status' => '200',
            'message' => 'Success View Selective Barang',
            'data' => $data
        );
    } else {
        $responseSelect = array(
            'status' => '500',
            'message' => 'Failed to View Selective Barang',
        );
    }

    header("Content-Type: application/json");
    echo json_encode($responseSelect);
}
