<?php

trait MatrixPrinter
{
    public function printMatrix()
    {
        if (empty($this->matrix)) {
            echo ("Matrix is empty");
        }

        if ($this->rows >= 1 && $this->columns >= 1) {
            if (!is_array($this->matrix[0])) {
                echo ($this->matrix[0] . "    ");
            }
            for ($rowsIndex = 0; $rowsIndex < $this->rows; ++$rowsIndex) {
                for ($columnsIndex = 0; $columnsIndex < $this->columns; ++$columnsIndex) {
                    echo ($this->matrix[$rowsIndex][$columnsIndex] . "    ");
                }
                echo ("\n");
            }
        }
    }
}
