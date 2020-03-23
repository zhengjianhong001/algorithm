<?php
function counting_sort($arr, $maxValue = null) {
    if ($maxValue === null) {
        $maxValue = max($arr);
    }
    // +1 是为了给0一个位子
    for ($m = 0; $m < $maxValue + 1; $m++) {
        $bucket[] = null;
    }

    $arrLen = count($arr);
    for ($i = 0; $i < $arrLen; $i++) {
        if (!array_key_exists($arr[$i], $bucket)) {
            $bucket[$arr[$i]] = 0;
        }
        $bucket[$arr[$i]]++;
    }

    $sortedIndex = 0;
    foreach ($bucket as $key => $len) {
        if($len !== null){
            for($j = 0; $j < $len; $j++){
                $arr[$sortedIndex++] = $key;
            }
        }
    }

    return $arr;
}

$lists = [78, 34, 54, 10, 2, 10, 23, 1];
echo "<pre>";
print_r(counting_sort($lists));
echo "</pre>";