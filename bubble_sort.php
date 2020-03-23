<?php
    // $str = '29,10,14,37,14';
    // $arr = explode(',', $str);
    
    // for ($i = 0; $i < count($arr); $i++) {
    //     for ($j = $i + 1; $j < count($arr); $j++) {
    //         if ($arr[$i] > $arr[$j]) {
    //             $tmp = $arr[$j];
    //             $arr[$i] = $arr[$j];
    //             $arr[$j] = $tmp;
    //         }
    //     }    
    // }
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    // exit;

    $demo_array = [29,10,14,37,14];
    for ($i = 0; $i < count($demo_array); $i++) {
        for ($j = $i+1; $j < count($demo_array); $j++) {
            if ($demo_array[$i] > $demo_array[$j]) {
                $tmp = $demo_array[$i];             
                $demo_array[$i] = $demo_array[$j];            
                $demo_array[$j] = $tmp;            
            }
        }
    }
    // 打印结果集
    echo '<pre>';
    var_dump($demo_array);
    echo '</pre>';

    // do {
    //     $swapped = false;
    //     for ($i = 0; $i < count($arr) - 1; $i++) {
    //         if ($arr[i+1] > $arr[$i]) {
    //             $num = $arr[$i];
    //             $arr[$i+1] = $arr[$i];
    //             $arr[$i] = $num;
    //             $swapped = true;
    //         }
    //     }
    // } while ($swapped);
    // print_r($arr);