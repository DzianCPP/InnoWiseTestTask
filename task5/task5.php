<?php

// Given two integers A and B. Write a function that outputs all numbers from A to B inclusive,
//in ascending order if A < B, or in descending order otherwise. Use recursion.
// Func args: (integer A, integer B).

// For example
// Input: 4, 9
// Output: 4, 5, 6, 7, 8, 9

// Input: 9, 4
// Output: 9, 8, 7, 6, 5, 4

// What would success look like?
// A function that outputs all digits from A to B in the order given by the condition

function printNumbers(int $a, int $b)
{
    if ($a < $b) {
        echo ($a . ", ");
        printNumbers(++$a, $b);
        return;
    }

    if ($a > $b) {
        echo ($a . ", ");
        printNumbers(--$a, $b);
        return;
    }
    if ($a === $b) {
        echo ($a);
        return;
    }
}
