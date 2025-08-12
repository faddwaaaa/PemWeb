<?php
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

function luas($a,$t) {
    $l = 0.5* $a * $t;
    return $l;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "luas : " . luas(2,4);
?>