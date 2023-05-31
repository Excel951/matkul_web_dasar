<?php
include './read_allorder.php';

for ($i = 0; $i < count($response["orders"]); $i++) {
    echo $response["orders"][$i]["item"] . "<br>";
}
