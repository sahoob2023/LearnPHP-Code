<!-- array map functon in use.. -->
<!-- <?php
function fun($key, $value){
    return "$key = $value";
}
$a = [1, 2, 3, 4, 5];
$b = ['lemon', 'orange', 'guava', 'mango', 'apple'];
$new = array_map('fun', $a, $b);

echo '<pre>';
print_r($new);
echo '</pre>';
?> -->

<!-- or.. -->
<!-- <?php
function fun1($key1, $value1){
    return "$key1 = $value1";
}
$ab = [1, 2, 3, 4, 5];
$bc = ['lemon', 'orange', 'guava', 'mango', 'apple'];
$new1 = array_map(null, $ab, $bc);

echo '<pre>';
print_r($new1);
echo '</pre>';
?>  -->


<!-- associative array in use.. -->
<?php
function oppo($null){
    return strtoupper($null);
}
$fru1 = [
    'a' => 'lemon',
    'b' => 'orange',
    'c' => 'guava',
    'd' => 'banana'
];
$neww1 = array_map('oppo', $fru1);
echo '<pre>';
print_r($neww1);
echo '</pre>';
?>