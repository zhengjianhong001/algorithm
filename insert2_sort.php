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

$arr = [2, 19, 100, 99, 4, 19];
echo "<pre>";
print_r(insertSort($arr));
echo "</pre>";