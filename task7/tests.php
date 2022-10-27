<?php

include "task7.php";

function test($url)
{
    echo (validateURL($url) . "\n");
}

$urls = array("ok.ru", "htps://www,innowise,com/", "https://www.innowise.com/", "htwp://vk.com");

foreach ($urls as $url) {
    test($url);
}
