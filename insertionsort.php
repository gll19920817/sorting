<?php
/**
 * 插入排序思想：
 * 从数组第二个元素开始向前比较，如果前一个元素比当前元素大，则后移前一个元素一个位置
 */
function IS(&$arr, $length) {
    for($i=1; $i<$length; $i++) {
        for($j=$i; $j>0; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j-1];
                $arr[$j-1] = $tmp;
            }
        }
    }
}

$arr = [5,2,1,4,6,8,7,9];

IS($arr, 8);

print_r($arr);
