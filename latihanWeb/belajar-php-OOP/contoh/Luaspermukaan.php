<?php
require_once 'Kotakhitung.php';
class Luaspermukaan extends Kotakhitung
{
    public function hitunglp()
    {
        $lp= 2*(($this->panjang*$this->lebar)+($this->panjang*$this->tinggi)
        +($this->tinggi*$this->lebar));
        return $lp;
    }
}