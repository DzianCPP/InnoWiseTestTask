<?php

include "field.php";
include "findpath.php";

function test($matrix, $start, $end)
{
    $path = findShortPath($matrix, $start, $end);

    for ($i = 0; $i < count($path); ++$i) {
        for ($k = 0; $k < count($path[$i]); ++$k) {
            echo ("[ " . $path[$i][$k] . " ]");
        }

        echo ("\n");
    }
}

// $field = new Field();

$matrix = array(
    array(0, 0, "A", 1),
    array(1, 1, 0, 0),
    array(1, 1, 1, 0),
    array(1, 0, 0, 0),
    array(1, "B", 1, 1)
);

test($matrix, array('row' => 0, 'col' => 2), array('row' => 4, 'col' => 1));
