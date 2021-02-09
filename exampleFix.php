<?php 
$item = 35;


// range(1,$item);
$items=range(0,$item,1);//0-35までの値を1個ずつ配列に格納
$check3 = range(0,$item,3);//3の倍数取得
$check5 = range(0,$item,5);//5
$check15 = range(0,$item,15);//15

$check3Arr = array_fill_keys($check3,'Buzz');//上記$check3,5,15で取得した倍数をインデックスにして文字を格納
$check5Arr = array_fill_keys($check5,'Buzz');
$check15Arr = array_fill_keys($check15,'FizzBuzz');


$resultArr = array_replace($items, $check3Arr, $check5Arr, $check15Arr);
print_r($resultArr);
$resultArrShift=(array_shift($resultArr));


print_r($resultArr);
foreach($resultArr as $i){
    echo $i."\n";
}

?>