<?php

include "task2.php";

function test(string $date)
{
    echo (daysLeftToBd($date) . "\n");
    return;
}

$birthdays = array("18 May 1996", "01 January 2002", "01 May 1997", "20 Oct 2001", "16-03-2011");

foreach ($birthdays as $bd) {
    test($bd);
}
