<!-- array replace function in use.. -->
<!-- <?php
$food = ["apple", "orange", "banana",  "guava"];
$veggle = ["carrot", "pea"];
$color = ["red", "black", "blue"];

$newarray =array_replace($food,$veggle,$color);

echo "<pre>";
 print_r($newarray);
 echo "</pre>";
?> -->




<!-- array replace recrusive function in use... -->
<?php
$array1 = array("a" => array("red"), "b" => array("green","pink"));
$array2 = array("a" => array("yellow"), "b" => array("black"));

$new = array_replace_recursive($array1,$array2);
echo "<pre>";
print_r($new);
echo "</pre>";
?>