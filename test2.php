<?php 

$items = ['Fizzu',"Buzz"];
$posted = 35;

for($i=1;$i<$posted;$i++){
    if($i%3===0 && $i%5===0){
        echo implode($items);
    }elseif($i%3===0){
        echo $items[0];
    }elseif($i%5===0){
        echo $items[1];
    }else{
        echo $i;
    }
    
}





?>