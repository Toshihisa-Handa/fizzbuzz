<?php 
$n = $_POST['item'];
$arr = range(1,$n);

if($_POST){


foreach($arr as $val){
  switch($val){
   case $val%3===0 && $val%5===0:
    echo "FizzBuzz\n";
    break;
   
    case $val%3===0:
        echo"Fizz\n";
        break;
    case $val%5===0;
    echo"Buzz\n";
    
    case $val%3!=0||$val%5!=0:
    echo $val."\n";
    break;
   
  }
}

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="number" name='item'>
<input type="submit">

</form>
    
</body>
</html>