<?php

include "matrix.php";

function test(Matrix $m1, Matrix $m2, Matrix $m3, Matrix $m4, Matrix $m5)
{

    $m3->addMatrix($m4);
    $m3->printMatrix();

    $m2->multiplyByNumber(3);
    $m2->printMatrix();

    $m6 = $m3->multiplyMatrix($m5);
    $m6->printMatrix();
}

$m1 = new Matrix(array(
    array(1, 2, 3, 4, 5)
));

$m2 = new Matrix(array(array(1)));

$m3 = new Matrix(array(
    array(1, 2, 3, 4),
    array(0, 5, 4, 1)
));

$m4 = new Matrix(array(
    array(4, 4, 4, 4),
    array(1, 1, 1, 1)
));

$m5 = new Matrix(array(
    array(1, 1, 0),
    array(2, 2, 2),
    array(0, 0, 0),
    array(3, 3, 3)
));


test($m1, $m2, $m3, $m4, $m5);
