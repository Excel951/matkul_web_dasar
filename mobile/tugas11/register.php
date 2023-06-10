<?php
include './connection.php';

$nama = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$querySQL = "INSERT INTO `users_210045`(`nama`, `username`, `password`) VALUES (?,?,?)";

$statement = $conn->prepare($querySQL);
$statement->bind_param('sss', $nama, $username, $password);
$statement->execute();
// $statement->store_result();
// $statement->bind_result($result);

// if ($statement->num_rows() == 1) {
//     $rows = array();

//     while ($statement->fetch()) {
//         $results['Response'] = $result;
//     }
// }
// $results['name'] = $nama;
// $results['username'] = $username;
// $results['password'] = $password;

// echo json_encode($results);

// $statement->free_result();
$statement->close();
