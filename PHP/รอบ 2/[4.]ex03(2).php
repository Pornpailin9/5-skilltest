<?php

// ----------------------------
$text = "iLoveYouSoMuchEiEi";
print_r((ex03($text)));
// ----------------------------

    function ex03($text){
     $num = 0;
     $num = preg_match_all('/((?:^|[A-Z])[a-z]+)/',$text,$matches);
     return $num; 
 }