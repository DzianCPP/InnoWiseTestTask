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
        $currentNode = $queue->dequeue();
        $visitedNodes[] = $currentNode;
        for ($i = 0; $i < count($direction); ++$i) {
            $currentDirection = $direction[$i];
            $nodeToEnqueue = concatNodes($currentNode, $currentDirection);

            if ($nodeToEnqueue['row'] === -1 || $nodeToEnqueue['col'] === -1 || $nodeToEnqueue['row'] > count($matrix) - 1 || $nodeToEnqueue['col'] > count($matrix[0]) - 1) {
                continue;
            }

            if ($matrix[$nodeToEnqueue['row']][$nodeToEnqueue['col']] === 0) {
                if (!inArray($visitedNodes, $nodeToEnqueue)) {
                    $queue->enqueue($nodeToEnqueue);
                }
            } elseif ($matrix[$nodeToEnqueue['row']][$nodeToEnqueue['col']] === $matrix[$end['row']][$end['col']]) {
                break;
            }
        }
    }

    foreach ($visitedNodes as $visited) {
    }

    return $path;
}

function concatNodes($currentNode, $currentDirection)
{
    $nodeToEnqueue['row'] = $currentNode['row'] + $currentDirection['row'];
    $nodeToEnqueue['col'] = $currentNode['col'] + $currentDirection['col'];
    return $nodeToEnqueue;
}

function inArray($array, $node): bool
{
    foreach ($array as $element) {
        if ($element['row'] === $node['row'] && $element['col'] === $node['col']) {
            return true;
        }
    }
    return false;
}
