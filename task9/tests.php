<?php

include_once "aspirant.php";

$arr = array(
    new Student("Frodo", "Baggins", "History", 4.9),
    new Aspirant("Gendalf", "Grey", "Hiking", 5),
    new Student("Smeagol", "Gollum", "Fishing", 5)
);

function test(array $arr)
{
    foreach ($arr as $el) {
        echo ($el->getScholarship() . " USD\n");
    }
}

test($arr);
