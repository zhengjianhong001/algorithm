<?php
function insertSort($arr) {
    $len = count($arr);
    
    for ($i = 1; $i < $len; $i++) {
        $tmp = $arr[$i];
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($tmp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            } else {
                break;
            }
        }
    }
    return $arr;
}

$arr = [78, 34, 54, 10, 2, 10, 23, 1];
echo "<pre>";
print_r(insertSort($arr));
echo "</pre>";