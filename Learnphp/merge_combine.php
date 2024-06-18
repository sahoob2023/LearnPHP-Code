<!-- array merge function in use.. -->
<!-- <?php
    $food = ["apple",'a' => "orange", "banana",'b' => "guava"];
    $veg = ["carrot", 'b' => "pea", 44, 54];

    // $newarray = array_merge($food,$veg);
    $newarray = array_merge_recursive($food,$veg);

    echo "<pre>";
    print_r($newarray);
    echo "</pre>";
?> -->


<!-- array combine in use.. -->
<?php
$name = ["ram", "sita", "laxmna"];
$age = ["11", "54", "47"];
$ar = array_combine($name, $age);

echo "<pre>";
print_r($ar);
echo "</pre>";
?>