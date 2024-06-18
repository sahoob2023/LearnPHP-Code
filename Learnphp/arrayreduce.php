<!-- array reduce function in use. -->
<!-- <?php
function chintu($n , $m){
    return $n . "-" . $m;
}
$bc = ['lemon', 'orange', 'guava', 'mango', 'apple'];
$new = array_reduce($bc, 'chintu');

echo '<pre>';
print_r($new);
echo '</pre>';
?> -->

<!-- or.. -->
<?php
function chintu1($n , $m){
    return $n . "-" . $m;
}
$bc = ['lemon', 'orange', 'guava', 'mango', 'apple'];
$new = array_reduce($bc, 'chintu1', 'carrot');

echo '<pre>';
print_r($new);
echo '</pre>';
?>