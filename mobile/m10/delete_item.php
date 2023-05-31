<?php
error_reporting(0);

include './connnection.php';

$response = array();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    // $item = $_POST['item'];

    $querySQL = "DELETE FROM myorder_210045 where id=$id";
    $result = mysqli_query($conn, $querySQL);
    $row_count = mysqli_affected_rows($conn);

    if ($row_count > 0) {
        $response["success"] = 1;
        $response["message"] = "Deleted Successfully";
    } else {
        $response["success"] = 0;
        $response["message"] = "Failed to Delete";
    }

    echo json_encode($response);
}
