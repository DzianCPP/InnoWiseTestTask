<?php

include_once "studentBase.php";

class Student extends StudentBase
{
    public function __construct(string $firstName, string $lastName, string $group, float $averageMark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->averageMark = $averageMark;
    }

    public function getScholarship(): int
    {
        if ($this->averageMark === 5) {
            return 100;
        }

        return 80;
    }
}
