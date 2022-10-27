<?php

class Field
{
    private $field = null;
    private $A = array(), $B = array();

    public function __construct()
    {
        $this->generateField();
    }

    private function generateField(): array
    {
        for ($i = 0; $i < 4; ++$i) {
            for ($k = 0; $k < 4; ++$k) {
                $this->field[$i][$k] = rand() % 2;
            }
        }

        $this->A = array('row' => rand() % 4, 'col' => rand() % 4);
        $this->B = array('row' => rand() % 4, 'col' => rand() % 4);

        $this->field[$this->A['row']][$this->A['col']] = "A";
        $this->field[$this->B['row']][$this->B['col']] = "B";

        return $this->field;
    }

    public function getField(): array
    {
        return $this->field;
    }

    public function getACoordinates()
    {
        return $this->A;
    }

    public function getBCoordinated()
    {
        return $this->B;
    }
}
