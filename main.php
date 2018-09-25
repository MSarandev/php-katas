<?php

function rotLeft($a, $d) {
    for($i = 0; $i < $d; $i++){
        $temp = $a[0];
        array_shift($a);
        array_push($a, $temp);
    }

    echo implode(" ",$a);
}

//rotLeft([1,2,3,4,5], 4);

