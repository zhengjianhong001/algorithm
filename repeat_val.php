<?php
function getRepeat($arr) {
    $unique_arr = array_unique($arr);   
    // 获取重复数据的数组   
    $repeat_arr = array_diff_assoc ($arr, $unique_arr);
    return $repeat_arr;
}
$array = [1, 2, 3, 4, 5, 6, 8, 6];
print_r(getRepeat($array));
// 输出
// Array ( [7] => 6 )