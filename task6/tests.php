<?php

include "task6.php";

function test(string $input)
{
    echo (transformString($input) . "\n");
}

test("               ---The quick-brown_fox jumps over the_lazy-dog   ----    ");
test("");
test(" ");
test("    ");
test("a");
test("1");
test(" _--a- ");
