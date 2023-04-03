<?php
    $myObj=new stdClass();
    $myObj->kode=$_POST('kode');
    $myObj->nama=$_POST('nama');
    $myObj->satuan=$_POST('satuan');

    $myJSON=json_encode($myObj);
    echo $myJSON;
?>