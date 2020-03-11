<?php

// ----------------------------
    $arr = [44,2,19,1];
    $arr2 = ["text1","text2","text3","text4"];
    var_dump (ex03($arr,$arr2));
    //print_r (ex03($arr,$arr2));
// ----------------------------

    function ex03($arr,$arr2){
        $count_arr2 =  count($arr2);
        $sum = [];


        for($i=0;$i<$count_arr2;$i++){
            echo $sum[$i] = $arr[$i] % $count_arr2;
            if($sum[$i] == 0){
                $sum[$i] = "text1";
            }else if($sum[$i] == 1){
                $sum[$i] = "text2";
            }else if($sum[$i] == 2){
                $sum[$i] = "text3";
            }else if($sum[$i] == 3){
                $sum[$i] = "text4";
            }
        }
            return $sum;
    }



