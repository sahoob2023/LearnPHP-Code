<?php
$x = 10;
function test(){
    global $x;
    echo "variable x inside function : $x<br>";
}
test();
echo "variable x outside function : $x";
?>