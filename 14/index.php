<?php
$a = 2;
$b = 3;
$c = 4;
$e = 5;
$x = 6;

$y1 = ( $a * $x + 2 * $b * $x**2 ) * abs( cos( $x**2 ) ) / pi() * $e**$x;
echo "\$y1 = " . $y1 . '<br>';

$y2 = pow( $a * log( $b * $x ), 1/3 ) / 1 + sin( $a * $x )**2;
echo "\$y2 = " . $y2 . '<br>';

$y3 = ( abs( sin( $x**3 ) ) + $a ) * $e**$a / pow( ( $b**2 + $c**2 ), 1/3 )  ;
echo "\$y3 = " . $y3 . '<br>';