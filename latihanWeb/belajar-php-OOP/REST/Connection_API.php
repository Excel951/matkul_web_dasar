<?php
define("server", "localhost");
define("user", "root");
define("password", "");
define("db", "toko");

$conn = mysqli_connect(server, user, password, db);

if (!$conn) {
    die("Could not connect to database");
}
