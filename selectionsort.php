<?php
/**
 * 选择排序思想：
 * 由前向后遍历数组，并假设当前index对应元素比后续所有元素小
 * 如果存在后续元素比当前元素小，则记录该较小元素index
 * 遍历完成后，假如当前index和最小元素index不同，则交换当前元素和最小元素值位置
 */

function SS(&$arr, $length) {
    for($i=0; $i<$length; $i++) {
        $minIndex = $i;

        for($j=$i+1; $j<$length; $j++) {
            if($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        if($minIndex != $i) {
            $tmp = $arr[$minIndex];
            $arr[$minIndex] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }
}

$arr = [3,1,2,4,7,5,6,9];

SS($arr, 8);

print_r($arr);
