<?php
//PDO = php Data Object
class Membacabarang
{
public function koneksi(){
try{
    $conn = new PDO("mysql:host=localhost;dbname=toko", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    return $conn;
}
catch(PDOException $e)
{
    //echo "Connection failed: " . $e->getMessage();
    return $conn;
}

}

public function baca()
{
    $stmt=$this->koneksi()->prepare("select * from barang");
    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);
}
public function isi($kodebr,$nama,$satuan,$hargabeli,$hargajual)
{
    $sql = "INSERT INTO barang 
    VALUES ('$kodebr', '$nama', '$satuan','$hargabeli','$hargajual')";
    $this->koneksi()->exec($sql);
}

}



?>