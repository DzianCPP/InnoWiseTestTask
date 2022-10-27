<?php

// Given a string with a url address. Write a function to check if this string is a valid url address using regular expressions.
// For example
// Input:       htps://innowise,com/
// Output:    Not a valid URL
// Input:       https://innowise.com/
// Output:    OK
// Func args:  (string $input)
// What would success look like?
// A function that checks if the url is correct.

function validateURL(string $input)
{
    $regExp = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";

    if (preg_match($regExp, $input)) {
        return "OK";
    }

    return "Not a valid URL";
}
