<?php 
class check {
  public function checkFunc($val){
     if($val%3===0 && $val%5===0){
      return 'fizzBuzz';
    }elseif($val%3===0){
        return"fizz";
    }elseif($val%5===0){
        return "Buzz";
    }else{
        return $val;
    }
  }


}

$check = new check();
$arr = range(1,50,1);
foreach ($arr as $item) {
    echo $check->checkFunc($item)."\n";
};






?>