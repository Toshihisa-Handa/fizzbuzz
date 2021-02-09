<?php 
$n = 50;
$arr = range(1,$n);
function check($val){
    if($val%15===0){
        return 3;
    }
    if($val%3===0){
        return 1;
    }
    if($val%5===0){
        return 2;
    }else{
        return 0;
    }
};


    $Arr = [];
    for($i=1;$i<=$n;$i++){
        $items = [$i,'Fizz','Buzz','FizzBuzz'];
        array_push($Arr,$items[check($i)]);
    } 
    print_r($Arr);






?>