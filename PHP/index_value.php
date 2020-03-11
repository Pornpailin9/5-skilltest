<!-- เรื่อง array & function -->

<?php

    function sum_array($a){
        $sum1 = 0;

        foreach($a AS $index => $value){
            $sum2 = $index+$value;
            
            $sum1 += $index + $value;

            echo "$index + $value = ".$sum2."  => $sum1 <br>";
        }
        echo $sum1;
    }

    $a = array(20, 3, 4, 15, 7, 8, 10, 5, 2, 11, 12, 6, 9, 13, 17, 18, 14, 16, 19, 1);

    sum_array($a);

?>