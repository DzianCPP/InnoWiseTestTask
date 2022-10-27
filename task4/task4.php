<?php

// Given a list of values. Delete the element from the list in the 'n' position. After deleting the element, integer keys must be normalized.
//Use function array_values() is forbidden.
// Func args: (array $arr, int $position)
// For example
// Input: 
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// $position = 3;
// Output:
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
// What would success look like?
// A function that removes an element from an array by a key and restores the order of elements in that array.

function removeElement(array $arr, int $position): array
{
    if (empty($arr)) {
        throw new Exception("Empty array");
    }

    if ($position > count($arr)) {
        throw new Exception("Position out of range");
    }

    $arrTemporary = [];

    for ($i = 0; $i < count($arr); $i++) {
        if ($i !== $position) {
            $arrTemporary[] = $arr[$i];
        } else {
            continue;
        }
    }

    return $arr = $arrTemporary;
}
