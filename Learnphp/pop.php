<!-- array pop / push function in use.. -->
<?php
$food = ["apple", "orange", "banana",  "guava"];
array_pop($food);
array_push($food, "red");

echo "<pre>";
print_r($food);
echo "</pre>";
?>