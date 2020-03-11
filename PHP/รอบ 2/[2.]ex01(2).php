<?php

// ----------------------------
$param = -10.50;
print_r((ex01($param)));
// ----------------------------

function ex01($param)
{
    $test = strval($param);
    $is_nagative_number = false;
    if ($test == '-') {
        $is_nagative_number = true;
        $param = substr($param, 1);
    }
    if (strpos($param, ".")) {
        $param = substr($param, 0, strpos($param, ".")) . substr($param, strpos($param, ".") + 1, 20);
    } else {
        $param = substr($param, 0, 30);
    }
    $sum = 0;
    do {
        $sum += $param % 10;
    } while ($param = (int) $param / 10);
    if ($is_nagative_number == true) {
        $sum  = $sum * -1;
    }
    return $sum;
}
