<?php

trait MatrixOperations
{
    public function addMatrix(Matrix $summand)
    {
        if ($this->getRows() === $summand->getRows() && $this->getCols() === $summand->getCols()) {
            if ($this->getRows() >= 1 && $this->getCols() >= 1) {
                for ($rowsIndex = 0; $rowsIndex < $this->getRows(); ++$rowsIndex) {
                    for ($columnsIndex = 0; $columnsIndex < $this->getCols(); ++$columnsIndex) {
                        $this->matrix[$rowsIndex][$columnsIndex] += $summand->getMatrix()[$rowsIndex][$columnsIndex];
                    }
                }
            }
        } else {
            throw new Exception("Matrices are not of equal size");
        }
    }

    public function multiplyByNumber(int|float $number)
    {
        for ($rowsIndex = 0; $rowsIndex < count($this->matrix); ++$rowsIndex) {
            for ($columnsIndex = 0; $columnsIndex < count($this->matrix[0]); ++$columnsIndex) {
                $this->matrix[$rowsIndex][$columnsIndex] *= $number;
            }
        }
    }

    public function multiplyMatrix(Matrix $multiplyer): Matrix
    {
        if ($this->getCols() !== $multiplyer->getRows()) {
            throw new Exception("These matrices can't be multiplyed");
        }

        for ($rightColumns = 0; $rightColumns < $multiplyer->getCols(); $rightColumns++) {
            for ($leftRows = 0; $leftRows < $this->getRows(); $leftRows++) {
                $newMatrix[$leftRows][$rightColumns] = 0;
                for ($leftColumns = 0, $rightRows = 0; $leftColumns < $this->getCols()
                    && $rightRows < $multiplyer->getRows(); $leftColumns++, $rightRows++) {
                    $newMatrix[$leftRows][$rightColumns] += $this->matrix[$leftRows][$leftColumns] *
                        $multiplyer->getMatrix()[$rightRows][$rightColumns];
                }
            }
        }

        return $MatrixNew = new Matrix($newMatrix);
    }
}
