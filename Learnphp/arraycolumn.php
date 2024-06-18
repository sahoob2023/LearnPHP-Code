<!-- array column names for use.. -->
<!-- <?php
$array1 = [
    [
        'id' => 2201,
        'first_name' => 'biswajit',
        'last_name' => 'sahoo',
    ],
    [
        'id' => 2203,
        'first_name' => 'basudev',
        'last_name' => 'barik',
    ],
    [
        'id' => 2204,
        'first_name' => 'chitaranjan',
        'last_name' => 'barik',
    ]
 ];

 $new = array_column($array1, 'first_name', 'id');

echo '<pre>';
print_r($new);
echo '</pre>';
?> -->


<!-- array chunk values .. -->
<?php
$col = ['red', 'free', 'yellow', 'black', 'orange'];
$new1 = array_chunk($col, 3);
echo '<pre>';
print_r($new1);
echo '</pre>';

?>