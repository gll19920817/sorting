<?php
/**
 * 冒牌排序思想：
 * 多次遍历数组，且每次将数组中最大值往后移动
 */
function BS(&$arr, $length) {
    for($i=0; $i<$length; $i++) {
        for($j=0; $j<$length-$i-1; $j++) {
            if($arr[$j] > $arr[$j+1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $tmp;
            }
        }
    }
}

$arr = [3,1,5,7,6,2,8,4];

BS($arr, 8);

print_r($arr);
