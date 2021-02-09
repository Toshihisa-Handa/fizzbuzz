<?php
$item=100;
$i=1;

while($i<=$item){
    $result = match(true){
    $i%3===0 && $i%5===0 => "FizzBuzz\n",
    $i%3===0 => "Fizz\n",
    $i%5===0 => "Buzz\n",
    default =>$i,
    };
    echo$result;
    $i++;
}


