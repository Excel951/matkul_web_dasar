<?php
    $myObj=new stdClass();
    $myObj->kode=$_GET['kode'];
    $myObj->nama=$_GET['nama'];
    $myObj->satuan=$_GET['satuan'];
    
    $myJSON=json_encode($myObj);
    echo $myJSON;
?>