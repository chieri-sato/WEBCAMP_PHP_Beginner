<?php

$num1 = 0;
$num2 = 1;
$cnt = 0;

$ret = $num1 + $num2; 
echo "{$num1} \n";    
echo "{$num2} \n";

while($ret <= 10000 || $cnt === 1)
{
    echo "{$ret} \n";
    
    $num1 = $num2;
    $num2 = $ret;
    $ret = $num1 + $num2;
    
    if($ret >= 10000)
    {
        $cnt += 1;
    }
}