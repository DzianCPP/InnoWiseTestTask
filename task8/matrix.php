<?php

// Create a class "Matrix". The class must have the following variables:

// - a two-dimensional array of real numbers;
// - the number of rows and columns in the matrix.

// The class must have the following methods:

// - addition with another matrix;
// - multiplication by a number;
// - print output;
// - matrix multiplication. *

// What would success look like?
// A class that implements the necessary methods.

include "matrixPrinter.php";
include "matrixOperations.php";

class Matrix //wake up, Neo
{
    private $rows, $columns;
    private $matrix = [];

    public function __construct(array $Matrix = array(array(0)))
    {
        if (empty($Matrix)) {
            throw new Exception("Source array is empty");
        }

        if (!is_array($Matrix[0])) {
            throw new Exception("Source array is not two-dimensional");
        }

        if (empty($Matrix[0])) {
            throw new Exception("Source array is empty");
        }

        $this->buildArray($Matrix);
    }

    private function buildArray(array $Array)
    {
        $this->rows = count($Array);
        if (is_array($Array[0])) {
            $this->columns = count($Array[0]);
        } else {
            $this->columns = 1;
        }

        for ($rowsIndex = 0; $rowsIndex < count($Array); ++$rowsIndex) {
            $this->matrix[] = $Array[$rowsIndex];
        }
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function getCols()
    {
        return $this->columns;
    }

    public function getMatrix()
    {
        return $this->matrix;
    }

    use MatrixPrinter;
    use MatrixOperations;
}
