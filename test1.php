<?php 
// $_POST['item']
$item = 21;


for($i=1;$i<$item+1;$i++){
    if($i%3 ===0 && $i%5 ===00){
        echo 'FizzBuzz';
    }elseif($i%3===0){
        echo 'Fizz';
    }elseif($i%5 ===0){
        echo 'Buzz';
    }else{
        echo $i;
    }

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method='post'>
<input type="text" name='item'>
<input type="submit">


</form>
    
</body>
</html>
