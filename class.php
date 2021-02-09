<?php

class checkDivision
{
    function checkAndReturnValue($number, $division)
    {
        if ($number % $division == 0) {
            $returnValue = true;
        } else {
            $returnValue = false;
        }
        return $returnValue;
    }
}

$checkDivision = new checkDivision();
if ($checkDivision->checkAndReturnValue(11, 3)) {
    echo '割り切れる';
} else {
    echo "割り切れない";
}
