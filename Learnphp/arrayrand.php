<!-- array rand function in use.. -->
<!-- <?php
$col = ['black', 'red', 'green', 'yellow', 'blue'];

$new = array_rand($col,2);
echo $col[$new[0]];

echo '<pre>';
print_r($new);
echo '</pre>';
?> -->


<!-- array shuffle function in use... -->
<?php
$col1 = ['black', 'red', 'green', 'yellow', 'blue'];
shuffle($col1);

echo '<pre>';
print_r($col1);
echo '</pre>';
?>