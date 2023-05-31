<?php
error_reporting(0);

include('./connnection.php');

$response = array();

if (!(empty($_POST["item_name"]))) {
    $item_name = $_POST["item_name"];

    $querySQL = "INSERT INTO myorder_210045(`item`) values ('$item_name')";
    // $stmt = $conn->prepare($querySQL);
    // $stmt->bind_param('s', $item_name);
    // $stmt->execute();

    // if ($stmt->get_result() > 0) {
    //     $response["success"] = $stmt->get_result();
    // } else {
    //     $response["success"] = $stmt->get_result();
    // }

    $result = mysqli_query($conn, $querySQL);

    if ($result > 0) {
        $response["success"] = 1;
    } else {
        $response["success"] = 0;
    }

    echo json_encode($response);
}
