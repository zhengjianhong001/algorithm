<?php
// 使用递归实现斐波那契数列
function fibon($n){
    global $num1;
    $num1++;
    if ($n <= 2) {
        return 1;
    }
    return fibon($n - 1) + fibon($n - 2);
}

// 优化后的递归
function fibonac($one, $two, $n){
    global $num2;
    $num2++;
    if ($n > 2) {
        return fibonac($one + $two, $one, $n - 1);
    }
    return $one;
}

echo fibon(8);
echo "<br> 递归次数 $num1";
echo "<br>";
echo fibonac(1, 1, 8);
echo "<br> 递归次数 $num2";