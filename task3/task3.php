<?php

// Write a PHP function to add the digits by absolute of an integer repeatedly until the result has a single digit. 
// For example
// Input: 5689
// Output: 1
// Explanation: 5689 = 5+6+8+9 = 28 = 2+8 = 10 = 1+0 = 1
// What would success look like?
// A function that works with numbers, returning the output.

function addDigits(int $inputNumber)
{
    $inputNumber = abs($inputNumber);

    if ($inputNumber >= 0 && $inputNumber <= 9) {
        return $inputNumber;
    }

    $sum = 0;
    while (true) {
        while ($inputNumber >= 1) {
            $sum += $inputNumber % 10;
            $inputNumber /= 10;
        }

        if ($sum >= 1 && $sum <= 9) {
            break;
        } else {
            $inputNumber = $sum;
            $sum = 0;
        }
    }

    return $sum;
}
