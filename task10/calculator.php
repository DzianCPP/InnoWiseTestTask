<?php

// Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them,
// multiply them together, or divide them on request.

// You need to implement 8 methods: add(), multiply(), divide(), subtract(), addBy(), divideBy(), multiplyBy(), subtractBy().

// Provide an opportunity to make calculations by chain.

// For example:
// $mycalc = new MyCalculator(12, 6);
// echo $mycalc->add(); // Displays 18
// echo $mycalc->multiply(); // Displays 72
// // Calculation by chain
// echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )

// What would success look like?
// A class that executes the necessary methods.

class Calculator
{
    public function __construct(int|float $num1, int|float $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add()
    {
        $this->result = $this->num1 + $this->num2;
        return $this;
    }

    public function multiply()
    {
        $this->result = $this->num1 * $this->num2;
        return $this;
    }

    public function divide()
    {
        if ($this->num2 === 0) {
            return "Error: divider can't be 0(zero)";
        }

        $this->result = round($this->num1 / $this->num2, 3);
        return $this;
    }

    public function subtract()
    {
        $this->result = $this->num1 - $this->num2;
        return $this;
    }

    public function addBy(int|float $num3)
    {
        $this->result += $num3;
        return $this;
    }

    public function divideBy(int|float $num3)
    {
        if ($num3 === 0) {
            return "Error: divider can't be 0(zero)";
        }
        $this->result = round($this->result /= $num3, 3);
        return $this;
    }

    public function multiplyBy(int|float $num3)
    {
        $this->result = round($this->result *= $num3, 3);
        return $this;
    }

    public function subtractBy(int|float $num3)
    {
        $this->result -= $num3;
        return $this;
    }
    public function __toString()
    {
        return $this->result;
    }

    private $num1 = 0;
    private $num2 = 0;
    private $result = 0;
}
