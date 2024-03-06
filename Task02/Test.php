<?php

require_once 'Fraction.php';
use Task02\Fraction;

function runTest()
{
    // String representation test
    $m1 = new Fraction(4, 8);
    $correct = "1/2";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: $m1" . PHP_EOL;
    if ($m1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }


    // Adding test
    $m2 = new Fraction(1, 4);
    $m3 = $m1->add($m2);
    $correct = "3/4";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $m3 . PHP_EOL;
    if ($m3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    // Subtraction test
    $m4 = new Fraction(-5, 2);
    $m5 = $m4->sub($m2);
    $correct = "-2`3/4";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $m5 . PHP_EOL;
    if ($m5 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    // Check get
    $m6 = new Fraction(-1, 2);
    $numer = $m6->getNumerator();
    $demo = $m6->getDenominator();
    $correct = '-1';
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $numer . PHP_EOL;
    if ($numer == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    $correct = '2';
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $demo . PHP_EOL;
    if ($demo == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
}