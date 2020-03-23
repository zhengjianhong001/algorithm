<?php
function bubbleSort($arr) {
    $len = count($arr);
    
    for($i = 1; $i < $len; $i++) {
        for($k = 0; $k < $len - $i; $k++) {
            if($arr[$k] > $arr[$k + 1]) {
                $tmp = $arr[$k + 1];
                $arr[$k + 1] = $arr[$k];
                $arr[$k] = $tmp;
            }
        }
    }

    return $arr;
}

$arr = [78, 34, 54, 10, 2, 10, 23, 1];
echo "<pre>";
print_r(bubbleSort($arr));
echo "</pre>";