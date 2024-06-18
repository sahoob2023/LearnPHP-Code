<!-- sort function in use.. -->
<!-- <?php
$bc = ['lemon', 'orange', 'guava', 'mango', 'apple'];
sort($bc);

echo '<pre>';
print_r($bc);
echo '</pre>';
?> -->

<!-- reverse sort func in use.. -->
<!-- <?php
$bc1 = ['lemon', 'orange', 'guava', 'mango', 'apple'];
rsort($bc);

echo '<pre>';
print_r($bc1);
echo '</pre>';
?> -->

<!-- associative sort in use.. -->
<!-- <?php
$fru1 = [
    'a' => 'lemon',
    'b' => 'orange',
    'c' => 'guava',
    'd' => 'banana'
];
 asort($fru1);

echo '<pre>';
print_r($fru1);
echo '</pre>';
?> -->

<!-- associative reverse sorting in use.. -->
<!-- <?php
$fru1 = [
    'a' => 'lemon',
    'b' => 'orange',
    'c' => 'guava',
    'd' => 'banana'
];
 arsort($fru1);

echo '<pre>';
print_r($fru1);
echo '</pre>';
?> -->

<!-- key sorting in usee.. -->
<!-- <?php
$fru1 = [
    'a' => 'lemon',
    'e' => 'orange',
    'c' => 'guava',
    'd' => 'banana'
];
 ksort($fru1);

echo '<pre>';
print_r($fru1);
echo '</pre>';
?> -->

<!-- key reverse sort in use. -->
<!-- <?php
$fru1 = [
    'a' => 'lemon',
    'b' => 'orange',
    'c' => 'guava',
    'd' => 'banana'
];
 krsort($fru1);

echo '<pre>';
print_r($fru1);
echo '</pre>';
?> -->


<!-- natural sorting in usee.. -->
<!-- <?php
$bc1 = ['lemon', 'orange', 'guava', 'mango', 'apple'];
// natsort($bc1);
natcasesort($bc1);

echo '<pre>';
print_r($bc1);
echo '</pre>';
?> -->

<!-- array multi sort in usee.. -->
<!-- <?php
$bc1 = ['lemon', 'orange'];
$ab1 = ['guava', 'mango'];

array_multisort($bc1, $ab1);

echo '<pre>';
print_r($bc1);
echo '</pre>';

echo '<pre>';
print_r($ab1);
echo '</pre>';
?> -->

<!-- array reverse in usee -->
<?php

$bc1 = ['lemon', 'orange', 'guava', 'mango', 'apple'];
$newa = array_reverse($bc1);


echo '<pre>';
print_r($newa);
echo '</pre>';
?>