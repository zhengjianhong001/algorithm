<?php
    // $demo_array = [29,10,14,37,14];
    // for ($i = 0; $i < count($demo_array) - 1; $i++) {
    //     // 假设最小的值的位置
    //     $p = $i;
    //     // 使用 for 循环找出最小的数字
    //     for ($j = $i + 1; $j < count($demo_array); $j++) {
    //         if ($demo_array[$p] > $demo_array[$j]) {
    //             //比较，发现更小的,记录下最小值的位置；并且在下次比较时，应该采用已知的最小值进行比较。
    //             $p = $j;
    //         }
    //     }

    //     //已经确定了当前的最小值的位置，保存到$p中。
    //     //如果发现 最小值的位置与当前假设的位置$i不同，则位置互换即可
    //     if ($p != $i) {
    //         $tmp = $demo_array[$p];
    //         $demo_array[$p] = $demo_array[$i];
    //         $demo_array[$i] = $tmp;
    //     }
    // }

    // // 打印结果集
    // echo '<pre>';
    // var_dump($demo_array);
    // echo '</pre>';

function select_sort($arr) {
    $len = count($arr);

    for ($i = 0; $i < $len; $i++) {
        $p = $i;

        for ($j = $i + 1; $j < $len; $j++) {
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

    return $arr;
}

$arr = [78, 34, 54, 10, 2, 10, 23, 1];
echo "<pre>";
print_r(select_sort($arr));
echo "</pre>";