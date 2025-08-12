<?php
function add_five(&$value) {
  $value -= 5;
}

$num = 50;
add_five($num);
echo $num;
?>
