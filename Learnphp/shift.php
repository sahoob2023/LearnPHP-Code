<!-- array shift / unshift function in use ... -->
<?php
$food = ["apple", "orange", "banana",  "guava"];
array_shift($food);

array_unshift($food, "Mango");
print_r($food);
?>