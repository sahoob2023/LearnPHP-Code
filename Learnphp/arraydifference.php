<!-- array difference function in use.. -->
<!-- <?php
$a1 = ['a' => 'red', 'b' => 'green', 'c' => 'blue', 'd' => 'yellow'];
$a2 = ['a' => 'red', 'f' => 'green', 'd' => 'purple'];
$new = array_diff($a1, $a2);

echo '<pre>';
print_r($new);
echo '</pre>';
?> -->

<!-- array udiff uassoc function in use.. -->
<?php
function comapre($op,$opp){
    if ($op === $opp) {
        return 0;
    }
    return ($op > $opp) ? 1 : -1;
}
function comaprevalue($op,$opp){
    if ($op === $opp) {
        return 0;
    }
    return ($op > $opp) ? 1 : -1;
}

$a11 = ['a' => 'red', 'b' => 'green', 'c' => 'blue', 'd' => 'yellow'];
$a22 = ['a' => 'red', 'f' => 'green', 'd' => 'purple'];

$array = array_udiff_uassoc($a11, $a22, 'comapre', 'comaprevalue');
echo '<pre>';
print_r($array);
echo '</pre>';
?>