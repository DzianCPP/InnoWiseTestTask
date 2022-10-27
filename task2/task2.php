<?php

// Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday.
// Your script should determine the number of days based on the current date.
// Func args: (string $date).
// Acceptable date format is ’DD-MM-YYYY’.
// What would success look like?
// A function that returns how many days are left until the entered birthday.

function daysLeftToBd(string $date)
{
    $birthday = strtotime($date);
    $currentDay = time();

    $nextBirthday = 0;

    for ($thisDay = $currentDay;; $thisDay += (60 * 60 * 24)) {
        if (date("d-m", $thisDay) === date("d-m", $birthday)) {
            $nextBirthday = $thisDay;
            break;
        }
    }

    $daysLeft = $nextBirthday - $currentDay;

    return $daysLeft / (60 * 60 * 24);
}
