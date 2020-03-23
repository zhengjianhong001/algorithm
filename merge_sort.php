<?php
/**
 * merge sort
 *
 * @param array $lists
 * @return array
 */
function merge_sort(array $lists) {
    $n = count($lists);
    if ($n <= 1) {
        return $lists;
    }
    $left = merge_sort(array_slice($lists, 0, floor($n / 2)));
    $right = merge_sort(array_slice($lists, floor($n / 2)));
    $lists = merge($left, $right);
    return $lists;
}

function merge(array $left, array $right) {
    $lists = [];
    $i = $j = 0;
    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $lists[] = $left[$i];
            $i++;
        } 
        else {
            $lists[] = $right[$j];
            $j++;
        }
    }
    $lists = array_merge($lists, array_slice($left, $i));
    $lists = array_merge($lists, array_slice($right, $j));
    return $lists;
}

$lists = [78, 34, 54, 10, 2, 10, 23, 1];
echo "<pre>";
print_r(merge_sort($lists));
echo "</pre>";