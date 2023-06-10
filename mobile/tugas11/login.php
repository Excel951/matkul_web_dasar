<?php

include './connection.php';

$username = $_POST['username'];
$password = $_POST['password'];


$querySQL = "WITH cte AS (SELECT IFNULL((SELECT COUNT(*) idCount FROM `users_210045` WHERE username=? AND password=? GROUP BY id), 0) idCount) SELECT CASE idCount WHEN 0 THEN 'Kosong' WHEN 1 THEN 'Ada' ELSE 'Error: Lebih dari satu akun' end statusUser FROM cte";

$statement = $conn->prepare($querySQL);
$statement->bind_param('ss', $username, $password);
$statement->execute();
$statement->store_result();
$statement->bind_result($result);

if ($statement->num_rows() == 1) {
    $results['statusUser'] = array();

    while ($statement->fetch()) {
        $results['statusUser'] = $result;
    }

    if ($results['statusUser'] == "Kosong") {
        $results['success'] = 0;
    } else {
        $results['success'] = 1;
    }
} else if ($statement->num_rows() > 1) {
    $results['success'] = 0;
    $results['statusUser'] = 'Error: Lebih dari satu akun';
} else {
    $results['success'] = 0;
    $results['statusUser'] = 'Kosong';
}

echo json_encode($results);

$statement->free_result();
$statement->close();
