<?php

include_once "calculator.php";

function test($num1, $num2)
{
    $myCalc = new Calculator($num1, $num2);

    echo ($myCalc->add() . "   ");
    echo ($myCalc->subtract() . "   ");
    echo ($myCalc->multiply() . "   ");
    echo ($myCalc->divide() . "   \n");

    echo ($myCalc->add()->addBy(rand() % 10) . "   ");
    echo ($myCalc->add()->subtractBy(rand() % 10) . "   ");
    echo ($myCalc->add()->multiplyBy(rand() % 10) . "   ");
    echo ($myCalc->add()->divideBy(rand() % 10) . "   ");
}


test(rand() % 10, rand() % 10);
