<?php

$noOfDiamonds = 4300;

if($noOfDiamonds < 100){
    echo "You are eligble for double diamonds after topup.";
}else if($noOfDiamonds >= 100 && $noOfDiamonds <=500){
    echo "You are elible for half diamonds after topup";
}else{
    echo "No eligible for diamonds reward.";
}

?>