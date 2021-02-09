<?php 
// $n = 16;
// $baseArr = range(0,$n,1);
// $threeArr = range(0,$n,3);

// $arr = array_keys($baseArr);
// $arr3 = array_keys($threeArr);
// print_r($threeArr);



$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);
?>



