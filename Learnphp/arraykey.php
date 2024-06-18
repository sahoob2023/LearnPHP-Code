<!-- array keys in use.. -->
<?php
//    $color = ['red' , 'green' , 'black' , 'yellow' , 'brown'];
    // $new = array_keys($color);
    // $new = array_key_first($color);

    $color1 = [
    'a' => 'red' ,
    'b' => 'green' ,
    'c' => 'black' , 
    'd' => 'yellow' ,
    'e' => 'brown'
];
    $new1 = array_key_first($color1);

    echo '<pre>';
print_r($new1);
echo '</pre>';

?>