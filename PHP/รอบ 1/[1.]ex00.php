<?php

// ----------------------------
    $arry = [-1,0,-3,4];
    var_dump (ex00 ($arry));
// ----------------------------

function ex00 ($arry){
	$sum = array_sum($arry);
    return $sum;
}