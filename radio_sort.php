<?php
/**
 * 基数排序
 *
 * @param array $lists
 * @return array
 */
function radix_sort(array $lists) {
    $radix = 10;
    $max = max($lists);
    $k = ceil(log($max, $radix));
    if ($max == pow($radix, $k)) {
        $k++;
    }
    for ($i = 1; $i <= $k; $i++) {
        $newLists = array_fill(0, $radix, []);
        for ($j = 0; $j < count($lists); $j++) {
            $key = $lists[$j] / pow($radix, $i - 1) % $radix;
            $newLists[$key][] = $lists[$j];
        }
        $lists = [];
        for ($j = 0; $j < $radix; $j++) {
            $lists = array_merge($lists, $newLists[$j]);
        }
    }
    return $lists;
}

$lists = [78, 34, 54, 10, 2];
echo "<pre>";
print_r(radix_sort($lists));
echo "</pre>";