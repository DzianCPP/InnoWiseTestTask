<?php

include_once "student.php";

class Aspirant extends Student
{
    public function getScholarship(): int
    {
        if ($this->averageMark === 5) {
            return 200;
        }
        return 180;
    }
}
