<?php
error_reporting(0);

include './connnection.php';

$response = array();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $item_name = $_POST['item_name'];

    $querySQL = "UPDATE `myorder_210045` SET `item`=? WHERE id=?";
    $stmt = $conn->prepare($querySQL);
    $stmt->bind_param('si', $item_name, $id);
    $stmt->execute();

    if ($stmt->get_result()) {
        $response["success"] = 1;
    } else {
        $response["success"] = 0;
    }

    echo json_encode($response);
}
