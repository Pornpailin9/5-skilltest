<?php
    $s = "software engineering";
   // var_dump(ex_slap($s));
    print_r(ex_slap($s));

function ex_slap($s){
    $exam = [];
    $s1 = explode(" ", $s);         //ไม่นับช่องว่าง

    $count1 = strlen($s1[0]);
        for($i=1;$i<=$count1;$i++){
            $exam[$i - 1] = substr($s1[0],-$i,1);
        }
            $exam[$count1] = ' ';

    $count2 = strlen($s1[1]);
        for($i=1;$i<=$count2;$i++){
            $exam[$count1 + $i] = substr($s1[1],-$i,1);
        }
            echo $exam;
        return $exam;
    }

    // //--------------------------------
    // <?php
    // $s = "software engineering";
    // $s1 = explode(" ", $s);

    // $count = strlen($s1[0]);
    //     for($i=1;$i<=$count;$i++){
    //  echo substr($s1[0],-$i,1);
    //     }

    //     echo " ";

    // $count = strlen($s1[1]);
    //     for($i=1;$i<=$count;$i++){
    //         echo substr($s1[1],-$i,1);
    //     }