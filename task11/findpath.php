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

    // for ($row = 0; $row < count($matrix); ++$row) {
    //     for ($col = 0; $col < count($matrix[$row]); ++$col) {
    //         array_push($visitedNodes, false);
    //     }
    // }

    $queue = new SplQueue();
    $queue->enqueue($start);

    while (!$queue->isEmpty()) {
        $currentNode = $queue->dequeue();

        if (!in_array($visitedNodes, $currentNode)) {
            array_push($visitedNodes, $currentNode);
            checkNeighbours($currentNode, $direction);
        }
    }

    return $path;
}

function checkNeighbours($currentNode, $directions)
{
}
