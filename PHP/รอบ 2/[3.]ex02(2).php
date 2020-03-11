<?php

// ----------------------------
$n = 4;
print_r((ex02($n)));
// ----------------------------

function ex02($n){
    $arry = [];
    if($n > 100 || $n < 0){
        return $arry;
    }else{
        for($i = $n-1; $i >= 0; $i--){
            $sum = "";
            for($j = 0; $j <= $n-1; $j++){
                if($j < $i){
                    $sum .= " ";
                }else{
                    $sum .="#";
                }
            }
            array_push($arry, $sum);
        }
        return $arry;
    }
    
}