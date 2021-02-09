<?php
$n = 50;
$arr = range(0, $n, 1);
$pre3 = [];
$arr3 = [];


for ($i=0; $i < floor($n / 3)+1; $i++) {
    array_push($arr3,'Fizz');
    array_push($pre3,$i*3);
}
print_r($arr3);
print_r($pre3);
// array_shift($arr3);
// array_shift($arr);

$three = array_combine($arr3,$arr);
print_r($three);

