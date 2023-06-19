<?php
class Kotak
{
    private $panjang;
    private $lebar;
    private $tinggi;
    function tampil()
    {
        echo "Hello OOP!";
    }
    public function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }
    function hitungVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
    function lp()
    {
        return (2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi)));
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
