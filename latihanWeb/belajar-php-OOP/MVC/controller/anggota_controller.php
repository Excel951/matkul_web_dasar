<?php
require_once './model/anggota_model.php';
class anggota_controller
{
    public function index()
    {
        echo "Belajar MVC";
    }
    public function isinilai()
    {
        require './view/isinilai.php';
    }
    public function hitungnilai($a, $b)
    {
        $m = new anggota_model();
        if (isset($_POST['tambah'])) {
            echo $m->penjumlahan($a, $b);
        } else if (isset($_POST['kurang'])) {
            echo $m->pengurangan($a, $b);
        } else if (isset($_POST['kali'])) {
            echo $m->perkalian($a, $b);
        } else if (isset($_POST['bagi'])) {
            echo $m->pembagian($a, $b);
        }
    }
}
