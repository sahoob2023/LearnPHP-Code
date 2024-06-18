<!-- array splice in use.. -->
<?php
    $color = ['red' , 'green' , 'black' , 'yellow' , 'brown'];
    $col = ['orange' , 'cyan'];

      array_splice($color, 3, 2, $col);

echo '<pre>';
print_r($color);
echo '</pre>';
?>