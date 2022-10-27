<?php
include "task3.php";

function test(int $inputNum)
{
    echo (addDigits($inputNum) . "\n");
    return;
}

for ($i = -100; $i < 1000000; $i += 131) {
    test($i);
}
