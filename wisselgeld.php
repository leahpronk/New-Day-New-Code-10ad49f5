<?php

$input = $argv[1];
$input = round($input/0.05)*0.05;
$wisselgeld = array(50, 20, 10, 5, 2 , 1 , 0.5, 0.2, 0.1, 0.05);
foreach ($wisselgeld as $moela) {
    $amount = floor($input/$moela);
    if ($amount != 0) {
        $input -=($amount * $moela);
        if ($moela >= 1){ 
            echo "$amount x  $moela euro \n ";
        }
        else{
            $moela*=100;
            echo "$amount x $moela cent \n";
        }
    }
}