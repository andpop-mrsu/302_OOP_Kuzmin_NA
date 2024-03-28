<?php

use App\Stack;

function checkIfBalanced(string $expession): bool
{
    $simbolsOpen = '<{[(';
    $simbolsClose = '>}])';

    $simbols = new Stack();
    foreach (str_split($expession) as $simbol) {
        if (strpos($simbolsOpen, $simbol)) {
            $simbols->push($simbol);
        } else {
            $position = strpos($simbolsClose, $simbol);
            if ($position) {
                if ($simbols->top() == $simbolsOpen[$position]) {
                    $simbols->pop();
                } else {
                    return false;
                }
            }
        }
    }
    return $simbols->isEmpty();
}
