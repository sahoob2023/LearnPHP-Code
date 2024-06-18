<!-- <?php
$colors = ["red" , "green" , "blue" , "black"];
// for($i=0;$i<4;$i++){
//     echo "$colors[$i] <br>";
// }

// or..
echo "<pre>";
print_r($colors);
echo "<pre/>";
?> -->

<!-- Associative array in use.. -->
<!-- <?php
$col = [
    "bill" => 10,
    "joe" => 20,
    "peter" => 40
];
echo $col["joe"];
?> -->


<!-- foreach loop in use... -->
<!-- index array... -->
<?php
// $age = [
//     "a",
//     "b",
//     "c"
// ];
// foreach($age as $value) {
//     echo "$value <br>";
// }

// Associative array in use..
$age = [
    "a" => 10,
    "b" => 24,
    "c" => 45
];
foreach($age as $key => $value){
    echo  "$key =  $value <br>";
}
?>