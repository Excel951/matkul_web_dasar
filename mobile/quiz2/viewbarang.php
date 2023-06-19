<?php
include "./connection.php";

$querySQL = "SELECT * FROM barang210045";

$statement = $conn->prepare($querySQL);
$statement->execute();

$result = $statement->get_result();

$rows["list"] = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $item = array();

        $item["id"] = $row["id"];
        $item["nama"] = $row["nama"];
        $item["harga"] = $row["harga"];
        $item["stock"] = $row["stock"];

        array_push($rows["list"], $item);
    }

    $rows["success"] = true;
} else {
    $rows["success"] = false;
}

echo json_encode($rows, JSON_PRETTY_PRINT);
