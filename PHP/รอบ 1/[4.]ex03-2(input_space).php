<?php
// $x1 = 5;
// $x2 = 20;
// $k1 = 3;
// $k2 = 2;
// $arr1 = [10,2,14,4,7,6,1];
// $arr2 = [-10,-50,20,17,80];
// print_r(ex04($x2,$k2,$arr2));

$X = 5;
$K = 3;
$Arry = [10,2,14,4,7,6,1];
// var_dump (ex03($X,$K, $Arry));
print_r (ex03($X,$K, $Arry));

function ex03($X,$K,$Arry){
    for($i=0;$i<count($Arry);$i++){
        if($Arry[$i]>$X){
            $sum[$i][0] = $Arry[$i] - $X;
            $sum[$i][1] = $Arry[$i];

        }else{          //ทำไม่ให้ติดลบ
             $sum[$i][0] = $X - $Arry[$i];
             $sum[$i][1] = $Arry[$i];
        }
    }
    sort($sum);
    for($i=0;$i<$K;$i++){
        $summary[$i] = $sum[$i][1];
    }
return $summary;
}
?>