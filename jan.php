<?php
$my_hand = 1;
$you_hand = "cho";

$janken = array('gou' => array( 'cho' => 'win', 'par' => 'lost', 'gou' => 'darw'),
                'cho' => array( 'cho' => 'darw', 'par' => 'win', 'gou' => 'lost'),
                'par' => array( 'cho' => 'lost', 'par' => 'darw', 'gou' => 'win')
                );


$gu = ["cho"=>'win', "pa"=>'lose', 'gu'=>'draw'];
$cho = ["cho"=>'draw', "pa"=>'win', 'gu'=>'lose'];
$pa = ["cho"=>'lose', "pa"=>'draw', 'gu'=>'win'];

$jan = [$gu,$cho, $pa];

$result = $jan[$my_hand][$you_hand];

print $result;

// $arr = ["算数"=>30, "国語"=>60,70];
// $arr2 = ["社会"=>99, "理解"=>20,70,'先生'];
// $joined = [$arr,$arr2];


// echo $joined[1][0];


?>