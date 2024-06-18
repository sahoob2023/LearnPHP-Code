<?php
$a = 120;
if($a >= 80 && $a <= 100){
    echo "You must 1st devision";
}elseif($a >= 60 && $a <= 80){
    echo "You must 2nd division";
}elseif($a >= 45 && $a <= 60){
    echo "You must 3nd division";
}elseif($a >= 33 && $a <= 45){
    echo "You must 4th division";
}elseif($a < 33){
    echo "you are fail";
}else{
    echo "please enter a number";
}
?>