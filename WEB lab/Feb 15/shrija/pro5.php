<?php

$code[] = "Delhi Delhi 1";
$code[] = "Salem TamilNadu 2";
$code[] = "Madurai TamilNadu 3";

$val = $_REQUEST["val"];
$fl = 0;
for($i=0;$i<sizeof($code);$i++){
    if($code[$i] == $val){
        $fl = 1;
        break;
    }
}
if($fl==0){
    echo 'inValid';
}
else{
    echo 'valid';
}

?>