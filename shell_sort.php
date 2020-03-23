<?php
function shell_sort($lists) {
    $len = count($lists);
    $temp = 0;
    $gap = 1;
    while($gap < $len / 3) {
        $gap = $gap * 3 + 1;
    }
    for ($gap; $gap > 0; $gap = floor($gap / 3)) {
        for ($i = $gap; $i < $len; $i++) {
            $temp = $lists[$i];
            for ($j = $i - $gap; $j >= 0 && $lists[$j] > $temp; $j -= $gap) {
                $lists[$j+$gap] = $lists[$j];
            }
            $lists[$j+$gap] = $temp;
        }
    }
    return $lists;
}

$lists = [78, 34, 54, 10, 2, 10, 23, 1];
echo "<pre>";
print_r(shell_sort($lists));
echo "</pre>";