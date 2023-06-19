<?php
require_once("./kotakOOP1.php");

class latihanpermukaan2 extends Kotak
{
    public function hitunglp()
    {
        $x = parent::lp();
        return $x;
    }
}

$x = new latihanpermukaan2(10, 15, 15);
echo $x->hitunglp() . '<br>';

$y = new Kotak(10, 10, 10);
echo $y->hitungVolume() . '<br>';
echo $y->lp() . '<br>';
