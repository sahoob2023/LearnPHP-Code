<!-- <?php
function hello(){
    echo "Goof Mornings<br>";
}
hello();
hello();
?> -->


<!-- function with parameters in use.. -->
<!-- <?php
function sum($a , $b){
    echo  $a + $b ."<br/>" ;
}
function opp($a , $b){
    echo "Hello $a  $b <br> ";
}
sum(20,30);
opp("Biswa" , "sahoo");
?> -->


<!-- function with returning value in use.. -->
<!-- <?php
function chintu($fname , $lname){
    $a = "$fname $lname";
    return $a;
}
$fullname = chintu("Hello" , "Everyone");
echo $fullname;
?> -->

<!-- or... -->
<!-- <?php
function add($math, $eng, $sci){
    $s = $math + $eng + $sci;
    return $s;
}
function percetage($st){
    $per = $st / 3;
    return $per;
}
$total = add(55 , 60 , 45);
$res = percetage($total);
echo $res;
echo $total;
?> -->


<!-- function argument by reference value in use.. -->
<!-- <?php
function first($no){
    $no += 5;
}

function second(&$no){
    $no += 10;
}

$number = 50;
first($number);
echo "first no is: $number <br>";

second($number);
echo "second no is: $number <br>";
?> -->


<!-- Variable function in use.. -->
<!-- <?php
function lion($fire){
    echo "Hello $fire";
};
$func = "lion";
$func("Biswajit");

// or example...
$sayhello = function($name){
    echo "hello $name";
};
$sayhello("nalanda");
?> -->


<!-- Recrusive function in use.. -->
<?php
// function factorial($n){
//     if($n == 0){
//         return 1;
//     }else{
//         return $n * factorial($n - 1);
//     }
// }
// $res = factorial(3);
// echo $res;

function display($no1){
    if($no1 < 5){
        echo "$no1 <br>";
        display($no1 +1 );
    }
}
display(1)
?>