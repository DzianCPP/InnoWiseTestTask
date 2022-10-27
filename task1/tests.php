<?php

include "task1.php";

function test(int $num)
{
    echo ("IF $num: " . isGreaterIF($num) . "\n");
    echo ("Switch $num: " . isGreaterSWITCH($num) . "\n");
    echo ("Ternary $num: " . isGreaterTERNARY($num) . "\n");
    echo ("\n\n");
    return;
}

for ($i = -10; $i < 55; $i += 5) {
    test($i);
}
