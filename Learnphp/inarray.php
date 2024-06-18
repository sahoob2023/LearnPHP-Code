<!-- in array function in use.. -->
<!-- <?php
$food = ["orange", "mango", "potato", "grapes"];
if (in_array("de", $food)) {
    echo "find success";
}else{
    echo "can't find";
};
?> -->

<!-- or .. -->

<!-- <?php
$a = array(array('p' , 'h') , array('q' , 'e') , '0');
if (in_array(array('p' , 'a'), $a)) {
    echo "find success";
}else{
    echo "can't find";
};
?> -->



<!-- array search function in use.. -->
<?php
$fod = ["orange", "mango", "potato", "grapes"];
echo array_search("orange", $fod);
?>
