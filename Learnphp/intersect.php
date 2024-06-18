<!-- array intersect function in use.. -->
<!-- <?php
$a1 = ['a' => 'red', 'b' => 'green', 'c' => 'blue', 'd' => 'yellow'];
$a2 = ['a' => 'red', 'f' => 'green', 'd' => 'purple'];

$new = array_intersect_assoc($a1,$a2);
echo '<pre>';
print_r($new);
echo '</pre>';

?> -->


<!-- array userdefined associative function in use ... -->
<?php
function compare($c, $d){
    if($c === $d){
        return 0;
    }    
    return($c > $d) ? 1 : -1;
}
    $arr = ['a' => 'red', 'b' => 'green', 'c' => 'blue', 'd' => 'yellow'];
    $arr2 = ['a' => 'red', 'f' => 'green', 'd' => 'purple'];

    $newarr = array_intersect_uassoc($arr, $arr2, 'compare');

echo '<pre>';
print_r($newarr);
echo '</pre>';
?>