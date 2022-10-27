<?php

function findShortPath(array $matrix, array $start, array $end) //$start and $end are array with coordinated ($start = array('x' => rand()%10, 'y' => rand()%10))
{
    $path = array();
    $visitedNodes = array();
    $currentNode = array();
    $direction = array(
        array('row' => 1, 'col' => 0),
        array('row' => -1, 'col' => 0),
        array('row' => 0, 'col' => 1),
        array('row' => 0, 'col' => -1)
    );

    if ($start === $end) {
        array_push($visitedNodes, $end);
        return $path[] = $end;
    }

    $queue = new SplQueue();
    $queue->enqueue($start);

    while (!$queue->isEmpty()) {
        for ($i = 0; $i < count($direction); ++$i) {
            $newNode = ($start + $direction[$i]);
            $queue->enqueue($start + $direction[$i]);
        }
    }

    return $path;
}
