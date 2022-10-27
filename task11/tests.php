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

$filed = new Field();

test($field->getField(), $field->getACoordinates(), $field->getBCoordinated());
