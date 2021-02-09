<?php
$n = 50;
$arr = range(0, $n);
function check($item)
{
    if ($item % 15 === 0) {
        return "FizuBuzz";
    } elseif ($item % 3 === 0) {
        return "Fizu";
    } elseif ($item % 5 === 0) {
        return "Buzz";
    } else {
        return $item;
    }
};

$resultArr = array_map("check",$arr);
foreach($resultArr as $val){
    echo $val. "\n";
}