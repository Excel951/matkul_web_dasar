<?php
require_once 'Luaspermukaan.php';
$x = new Kotakhitung(20,30,30);
$x->panjang=10;
echo $x->panjang;
$x->tampil();
echo $x->volume(20,30,40);
echo $x->lp();
Luaspermukaan::$diameter = 20;
echo Luaspermukaan::$diameter;
echo Luaspermukaan::coba();

?>