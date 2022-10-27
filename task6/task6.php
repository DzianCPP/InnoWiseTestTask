<?php

// Given a string where words are separated by any of the '_', '-', ' ' characters. Write a function that converts such strings
// to single studly caps case words and removes extra spaces on both sides.
// For example
// Input:       ‘               The quick-brown_fox jumps over the_lazy-dog       ’
// Output:    ‘TheQuickBrownFoxJumpsOverTheLazyDog’
// Func args:  (string $input)
// What would success look like?
// A function that returns a string where all the individual words begin with a capital letter.

function transformString(string $input)
{
    if (empty($input)) {
        return "Input has no letters";
    }
    $inputArr = str_split(trim($input));
    $inputTemp = [];
    if (($inputArr[0] === ' ' || $inputArr[0] === '-' || $inputArr[0] === '_' || empty($inputArr[0])) && count($inputArr) === 1) {
        return "Input has no letters";
    }
    for ($i = 0; $i < count($inputArr); $i++) {
        if ($inputArr[$i] != ' ' && $inputArr[$i] != '-' && $inputArr[$i] != '_') {
            if (count($inputArr) === 1) {
                $inputTemp[] = strtoupper($inputArr[$i]);
                break;
            }

            if ($i > 0) {
                if ($inputArr[$i - 1] == ' ' || $inputArr[$i - 1] == '-' || $inputArr[$i - 1] == '_') {
                    $inputTemp[] = strtoupper($inputArr[$i]);
                } else {
                    $inputTemp[] = $inputArr[$i];
                }
            } else {
                $inputTemp[] = $inputArr[$i];
            }
        } else {
            continue;
        }
    }

    return $input = implode($inputTemp);
}
