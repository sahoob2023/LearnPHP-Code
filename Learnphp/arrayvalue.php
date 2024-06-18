<?php
$color = ['a' => 'red', 'b' => 'green', 'c' => 'red', 'd' => 'yelow'];
$newarray = array_unique($color);

echo '<pre>';
print_r($newarray);
echo '</pre>';
?>