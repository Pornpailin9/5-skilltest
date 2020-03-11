<?php

// ----------------------------
    $arr = [43,20,82,1];
    $arr2 = ["Fun","#61","Run","SE"];
    //var_dump (ex03($arr,$arr2));
    print_r (ex03($arr,$arr2));
// ----------------------------

    function ex03($arr,$arr2){
        $count_arr2 =  count($arr2);
        $sum = [];

        for($i=0;$i<$count_arr2;$i++){
            echo $sum[$i] = $arr[$i] % $count_arr2;
            if($sum[$i] == 0){
                $sum[$i] = "Fun";
            }else if($sum[$i] == 1){
                $sum[$i] = "#61";
            }else if($sum[$i] == 2){
                $sum[$i] = "Run";
            }else if($sum[$i] == 3){
                $sum[$i] = "SE";
            }
        }
            return $sum;
    }



