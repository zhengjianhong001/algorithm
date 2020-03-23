<?php
function select_sort($arr) {
    $num = 0;
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        $p = $i;

        for ($j = $i + 1; $j < $len; $j++) {
            $num++;
            if ($arr[$p] > $arr[$j]) {
                $p = $j;
            }
        }

        if ($p != $i) {
            $tmp = $arr[$p];
            $arr[$p] = $arr[$i];
            $arr[$i] = $tmp;
        }

    }
    echo $num;
    return $arr;
}

$list = [2, 19, 100, 99, 4, 19];
// $arr = [78, 34, 54, 10, 2, 10, 23, 1];
echo "<pre>";
print_r(select_sort($list));
echo "</pre>";

