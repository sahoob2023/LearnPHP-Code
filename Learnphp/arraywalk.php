<!-- array walk function in use.. -->
<!-- <?php
$fru = [
    'a' => 'lemon',
    'b' => 'orange',
    'c' => 'guava',
    'd' => 'banana'
];

array_walk($fru, 'newfun');

function newfun($key, $value){
    echo "$key : $value" . "<br>";
}
?> -->


<!-- array walk recrusive functon in use. -->
<?php
$fru1 = [
    'a' => 'lemon',
    'b' => 'orange',
    'c' => 'guava',
    'd' => 'banana'
];

array_walk_recursive($fru1, 'newfunction', 'is a key of');

function newfunction($key, $value, $param){
    echo "$key $value $param" . "<br>";
}
?>