<?php

//contribution program

$money = 1000;
$month = 12;
$percent = 1.5;
$sum1 = $money;
$sum2 = $money;
$sum3 = $money;
$i1 = 1;
$i2 = 1;
$i3 = 1;

for ( $i1 = 1; $i1 <= $month; $i1++ ) {
    $sum1 = $sum1 + ( ( $sum1 / 100 ) * ( $percent / 12 ) );
}
echo 'Ваш вклад в ' . $money . ' рублей, под ' . $percent . ' процента. Через год составит - '
. round( $sum1, 2 ) . ' рублей.<br>';

while ( $i2 <= $month ) {
    $sum2 = $sum2 + ( ( $sum2 / 100 ) * ( $percent / 12 ) );
    $i2 += 1;
}
echo 'Ваш вклад в ' . $money . ' рублей, под ' . $percent . ' процента. Через год составит - '
. round( $sum2, 2 ) . ' рублей.<br>';

do {
    $sum3 = $sum3 + ( ( $sum3 / 100 ) * ( $percent / 12 ) );
    $i3 += 1;
}
while ( $i3 <= $month );
echo 'Ваш вклад в ' . $money . ' рублей, под ' . $percent . ' процента. Через год составит - '
. round( $sum3, 2 ) . ' рублей.<br>';

echo '<br>';

//print numbers

$countNumbers = 10;
$i1 = 1;
$i2 = 1;
$i3 = 1;

for ( $i1 = 1; $i1 <= $countNumbers; $i1++ ) {
    echo $i1 . '<br>';
}
echo '<br>';

while ( $i2 <= $countNumbers ) {
    echo $i2 . '<br>';
    $i2 += 1;
}
echo '<br>';

do {
    echo $i3 . '<br>';
    $i3 += 1;
}
while ( $i3 <= $countNumbers );