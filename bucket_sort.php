<?php
function bucketSort($arr) {
    // 设置木桶
    $bucket = [];
    $min = min($arr);
    $max = max($arr);
    // 𝑏𝑢𝑐𝑘𝑒𝑡=𝑎𝑟𝑟𝑎𝑦𝑓𝑖𝑙𝑙(min, 𝑚𝑎𝑥−min + 1, 0);
    for ($m = $min; $m <= $max; $m++) {
        $bucket[$m] = 0;
    }
    // 将待排数据按照范围放到对应的木桶中
    $cnt = count($arr);
    for ($n = 0; $n < $cnt; $n++) {
        $bucket[$arr[$n]]++;
    }
    // 从木桶中拿出数据
    $result = [];
    for ($i = $min; $i <= $max; $i++) {
        if (($bucket[$i]) > 0) {
            for ($j = 1; $j <= $bucket[$i]; $j++) {
                $result[] = [$i];
            }
        }
    }
    // 处理数组
    $res = [];
    foreach ($result as $v) {
        $res[] = $v[0];
    }
    return $res;
}
 

$lists = [78, 34, 54, 10, 2, 10, 23, 1];
echo "<pre>";
print_r(bucketSort($lists));
echo "</pre>";