<?php

// Create an example of inheritance, implement the Student class and the Aspirant class,
// a graduate student differs from a student in having some kind of research work.

// The Student class contains variables: 
// - String firstName, lastName, group. 
// - Double averageMark.

// Create a variable of type Student that refers to an object of type Aspirant.

// Create a getScholarship() method for the Student class that returns the scholarship amount. 

// If the average grade of the student is 5, then the amount is 100 USD, otherwise 80 USD.
// Override this method in the Aspirant class. If the average grade of a graduate student is 5, then the amount is 200 USD,
// otherwise 180 USD.

// Create an array of Student type that contains objects of Student and Aspirant class.
// Call getScholarship() method for each element of the array.

// What would success look like?
// Implemented classes with defined methods, inheritance.

abstract class StudentBase
{
    protected string $firstName;
    protected string $lastName;
    protected string $group;
    protected float $averageMark;

    abstract public function __construct(string $firstName, string $lastName, string $group, float $averageMark);
    abstract public function getScholarship();
}
