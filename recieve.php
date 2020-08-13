<?php

$recieved = $_POST;

// ENT_COMPAT 「ダブルクオートのみ変換」
// ENT_QUOTES 「ダブル、シングルクオートを変換」
// ENT_NOQUOTES 「両方とも変換しない」


foreach($recieved as $key => $value){

    $value =htmlspecialchars($value,ENT_QUOTES,'UTF-8');

    echo $key."=>";
    echo $value;
    echo "<br>";
}




?>