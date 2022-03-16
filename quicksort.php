<?php

function QS(&$arr, $start, $end) {
    if($start >= $end) {
        return;
    }

    $pivot = partition($arr, $start, $end);

    QS($arr, $start, $pivot-1);
    QS($arr, $pivot+1, $end);
}

function partition(&$arr, $start, $end) {
    $pivot = $arr[$end];
    $index = $start;

    for($i=$start; $i<$end; $i++) {
        if($arr[$i] < $pivot) {
            $tmp = $arr[$index];
            $arr[$index] = $arr[$i];
            $arr[$i] = $tmp;

            $index++;
        }
    }

    $tmp = $arr[$index];
    $arr[$index] = $arr[$end];
    $arr[$end] = $tmp;

    return $index;
}

$arr = [1,5,2,4,6,8,3,7];

QS($arr, 0, 7);

print_r($arr);

?>
