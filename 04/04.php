<?php

// Напишите функцию вычисления факториала числа.

// можно циклом
function factorial($n) {
    if ($n < 0) return 0;
    
    if ($n == 0) return 1;
    
    $f = 1;
    
    for($i=1; $i <= $n; $i++) {
        $f = $f*$i;
    }

    return $f;
}

// можно рекурсией
function recFactorial($n) {
    if ($n < 0) return 0;
    
    if ($n == 0) return 1;
    
    return $n * recFactorial($n-1);
}

// -----------------------------

$start = microtime(true);
factorial(1000);
$end = microtime(true);
echo $end-$start;

echo "\n";

$start = microtime(true);
recFactorial(1000);
$end = microtime(true);
echo $end-$start;

echo "\n";

// рекурсивная функция работает медленнее
// но зато содержит меньше кода
