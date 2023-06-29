<?php
require_once './API_View.php';
require_once './API_Create.php';
require_once './API_View_Selective.php';
require_once './API_Delete.php';
require_once './API_Update.php';

$request_method = $_SERVER['REQUEST_METHOD'];

switch ($request_method) {
    case "GET":
        if (!empty($_GET["kode"])) {
            selectiveView();
        } else {
            viewBarang();
        }
        break;

    case "POST":
        createBarang();
        break;

    case "DELETE":
        deleteBarang();
        break;

    case "PATCH":
        updateBarang();
        break;

    default:
        break;
}
