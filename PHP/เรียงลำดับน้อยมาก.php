<?php

// ----------------------------
    $arr = [1,2,3];
    $arr2 = [2,3,4,5];
    //var_dump (ex02($arr,$arr2));
    print_r (ex02($arr,$arr2));
// ----------------------------

    function ex02($arr,$arr2){
        $sum = [0,0,0,0];
        $max = 0;
        $min = 0;

        // echo count($arr);
        // echo count($arr2);

        if(count($arr)>count($arr2)){
            $max=count($arr);
            $min=count($arr2);
            for($i=0;$i<$min;$i++){
                $sum[$i] = $arr[$i] + $arr2[$i];
            }
    
            for($i=$min;$i<$max;$i++){                  //loop สำหรับตัวเกิน
                $sum[$i] = $arr[$i];
            }
		}else{
            $max=count($arr2);
            $min=count($arr);
            for($i=0;$i<$min;$i++){
                $sum[$i] = $arr[$i] + $arr2[$i];
            }
    
            for($i=$min;$i<$max;$i++){                  //loop สำหรับตัวเกิน
                $sum[$i] = $arr2[$i];
            }
        }

        sort($sum);
        return $sum;
    }
?>