<!-- array flip function in use.. -->
<?php
$a = [
    'bill' => 10,
    'joe' => 20,
    'peter' => 30
];
// $nw = array_flip($a);
$nw = array_change_key_case($a, CASE_UPPER);
echo '<pre>';
print_r($nw);
echo '</pre>';
?>