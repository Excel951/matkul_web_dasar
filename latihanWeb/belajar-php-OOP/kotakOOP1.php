<?php
class Kotak
{
    private $panjang;
    private $lebar;
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function getPanjang()
    {
        return $this->panjang;
    }
    public function getLebar()
    {
        return $this->lebar;
    }
    public function hitungKeliling()
    {
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }
    public function hitungLuas()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
}
