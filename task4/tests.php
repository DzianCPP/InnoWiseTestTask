<?php

include "task4.php";

function test(array $arr, int $position)
{
    foreach (removeElement($arr, $position) as $el) {
        echo ($el . "\t");
    }

    echo ("\n");
    return;
}

$arrs = array(
    array(1, 2, 3, 4, 5),
    array(1, 3, 7, 99, -1, 0)
);

try {
    for ($i = 0; $i < count($arrs); $i++) {
        test($arrs[$i], rand() % 3);
    }
} catch (\Throwable $th) {
    echo ($th->getMessage());
}
