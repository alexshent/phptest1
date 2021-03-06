<?php

/*
Задан ассоциативный массив на 10 элементов.
Напишите код для получения ключа первого элемента 3-мя разными способами.
*/

$a = [
    'a' => 'A',
    'b' => 'B',
    'c' => 'C',
    'd' => 'D',
    'e' => 'E',
    'f' => 'F',
    'g' => 'G',
    'h' => 'H',
    'i' => 'I',
    'j' => 'J',
];


// первый способ
// вывод ключа текущего указателя массива
// указатель мы не двигали, поэтому он изначально указывает на первый элемент
echo key($a);


/*
второй способ

array_keys возвращает массив вида

Array
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
    [5] => f
    [6] => g
    [7] => h
    [8] => i
    [9] => j
)
*/

echo array_keys($a)[0];


// третий способ
// выводим ключ первого элемента в цикле foreach и разрываем цикл

foreach ($a as $key => $value) {
    echo $key;
    break;
}

