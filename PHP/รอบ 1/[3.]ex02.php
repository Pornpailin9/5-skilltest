<?php

// ----------------------------
	$A = 5;
	$B = 0;
	//var_dump (ex02($A,$B));
	print_r (ex02($A,$B));
// ----------------------------
 
function ex02($A,$B){
	$X = array();
	for($i=1;$i<=$A;$i++){
			if($A%$i == $B){
				array_push($X,$i);		// array_push = เอาตัวเพิ่มเข้าไปใน array
			}
	}
    return $X;
}