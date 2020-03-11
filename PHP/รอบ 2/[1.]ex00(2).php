<?php

// ----------------------------
$arry = [1,2,3,4,5];
var_dump (ex00 ($arry));
// ----------------------------

function ex00 ($arry){
    $sum = 0;
	for($i=0;$i<sizeof($arry);$i++){
        $sum += $arry[$i];
    }
    return $sum;
}