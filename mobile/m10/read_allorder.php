<?php
error_reporting(0);

include './connnection.php';

$response = array();

$querySQL = "SELECT * FROM myorder_210045";

$result = mysqli_query($conn, $querySQL) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    $response["orders"] = array();

    while ($row = mysqli_fetch_array($result)) {
        $item = array();
        $item["id"] = $row["id"];
        $item["item"] = $row["item"];

        array_push($response["orders"], $item);
    }
    $response["success"] = 1;
} else {
    $response["success"] = 0;
    $response["message"] = "No Items Found";
}

// echo json_encode($response);
