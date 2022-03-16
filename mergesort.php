<?php
/**
 * 归并算法思路：
 * 分治思想，将数组拆分为单元素然后进行合并，合并的过程中同时排序
 */

function MS(&$arr) {
    $len = sizeof($arr);
    if($len < 2) {
        return;
    }

    $mid = intval($len / 2);
    for($i=0; $i<$mid; $i++) {
        $L[] = $arr[$i];
    }

    for($i=$mid; $i<$len; $i++) {
        $R[] = $arr[$i];
    }

    MS($L);
    MS($R);

    merge($L, $R, $arr);
}

function merge($arr1, $arr2, &$arr) {
    $i = 0;
    $j = 0;
    $k = 0;
    $len1 = sizeof($arr1);
    $len2 = sizeof($arr2);

    
    while($i<$len1 && $j<$len2) {
        if($arr1[$i] < $arr2[$j]) {
            $arr[$k++] = $arr1[$i++];
        } else {
            $arr[$k++] = $arr2[$j++];
        }
    }

    while($i<$len1) {
        $arr[$k++] = $arr1[$i++];
    }
    
    while($j<$len2) {
        $arr[$k++] = $arr2[$j++];
    }
}


$arr = [6,3,7,8,2,1,4,5];

MS($arr);

print_r($arr);