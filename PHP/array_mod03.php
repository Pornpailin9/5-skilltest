<?php

// ----------------------------
    $arr = [62,123,30,25,65,20,79];
    $arr2 = ["Run","#61","SE","Fun","BUU","@"];
    //var_dump (ex03($arr,$arr2));
    print_r (ex03($arr,$arr2));
// ----------------------------

    function ex03($arr,$arr2){
        $count_arr2 =  count($arr2);
        $sum = [];

        for($i=0;$i<$count_arr2;$i++){
            echo $sum[$i] = $arr[$i] % $count_arr2;
            if($sum[$i] == 0){
                $sum[$i] = "Run";
            }else if($sum[$i] == 1){
                $sum[$i] = "#61";
            }else if($sum[$i] == 2){
                $sum[$i] = "SE";
            }else if($sum[$i] == 3){
                $sum[$i] = "Fun";
            }else if($sum[$i] == 4){
                $sum[$i] = "BUU";
            }else if($sum[$i] == 5){
                $sum[$i] = "@";
            }
        }
            return $sum;
    }



