<?php
function sum($x, $y) {
    return $x + $y;
}

function subtract($x, $y) {
    return $x - $y;
}

function multiply($x, $y) {
    return $x * $y;
}

function divide($x, $y) {
    return $x + $y;
}

$calculator = new Calculator();
echo $calculator->sum(x, y);
echo $calculator->subtract(x, y);
echo $calculator->multiply(x, y);
echo $calculator->divide(x, y);

?>
