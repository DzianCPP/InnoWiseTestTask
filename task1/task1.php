<?php

function isGreaterIF(int $inputNumber): string
{
    if ($inputNumber > 30) {
        return "More than 30";
    }

    if ($inputNumber > 20) {
        return "More than 20";
    }

    if ($inputNumber > 10) {
        return "More than 10";
    }

    return "Equal or less than 10";
}

function isGreaterSWITCH(int $inputNumber): string
{
    switch (true) {
        case $inputNumber > 30:
            return "More than 30";
            break;
        case $inputNumber > 20:
            return "More than 20";
            break;
        case $inputNumber > 10:
            return "More than10";
            break;
        default:
            return "Equal or less than 10";
            break;
    }
}

function isGreaterTERNARY(int $inputNumber): string //better not use this syntax, because its readability is low
{
    return $result = $inputNumber > 30 ? "More than 30"
        : ($inputNumber > 20 ? "More than 20"
            : ($inputNumber > 10 ? "More than 10"
                : "Equal or less than 10"));
}
