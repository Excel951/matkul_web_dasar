<?php
require_once('./controller/anggota_controller.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$x = new anggota_controller();
if ('/project/latihanWeb/belajar-php-OOP/MVC/index.php' === $uri) {
    $x->index();
} else if ('/project/latihanWeb/belajar-php-OOP/MVC/index.php/isinilai' === $uri && isset($_POST['nilai1']) && isset($_POST['nilai2'])) {
    $x->hitungnilai($_POST['nilai1'], $_POST['nilai2']);
} else if ('/project/latihanWeb/belajar-php-OOP/MVC/index.php/isinilai' === $uri) {
    $x->isinilai();
} else {
    header('HTTP/1.0 404 Not Found');
    echo "Page not found";
}
