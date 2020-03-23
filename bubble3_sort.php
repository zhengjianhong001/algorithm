<?php
// 改进版
function bubble_sort($list) {
    $len = count($list);
    for ($i = 0; $i < $len - 1; $i++) {
        $swapped = 0;
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($list[$j] > $list[$j + 1]) {
                $swapped = 1;
                $tmp = $list[$j + 1];
                $list[$j + 1] = $list[$j];
                $list[$j] = $tmp;
            }
        }
        if ($swapped == 0) {
            return $list;
        }
    }
    return $list;
}

// $list = [2, 3, 4, 5, 6, 19];
$list = [2, 19, 100, 99, 4, 19];
echo "<pre>";
print_r(bubble_sort($list));
echo "</pre>";