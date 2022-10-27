<?php

include "task5.php";

function test($a, $b)
{
    printNumbers($a, $b);
    echo ("\n\n\n");
}

for ($i = -25, $k = 25; $i <= $k; $i += 5, $k -= 5) {
    test($i, $k);
}
