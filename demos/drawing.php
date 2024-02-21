<?php

require_once __DIR__ . '/../vendor/autoload.php';

use BoxDesigner\DoubleLineBorder;
use BoxDesigner\Rectangle;
use BoxDesigner\SideLessThanOneException;

$doubleBorder = new DoubleLineBorder();

try {
    $rectangle = new Rectangle(1, 1);
    echo htmlspecialchars($rectangle->draw()) . PHP_EOL;

    $rectangle = new Rectangle(2, 2);
    echo htmlspecialchars($rectangle->draw()) . PHP_EOL;

    $rectangle = new Rectangle(3, 3);
    echo $rectangle->draw($doubleBorder) . PHP_EOL;

    $rectangle = new Rectangle(2, 6);
    echo htmlspecialchars($rectangle->draw()) . PHP_EOL;

    $rectangle = new Rectangle(3, 15);
    echo htmlspecialchars($rectangle->draw()) . PHP_EOL;

    $rectangle = new Rectangle(1, 10);
    echo htmlspecialchars($rectangle->draw()) . PHP_EOL;

    $rectangle = new Rectangle(10, 1);
    echo htmlspecialchars($rectangle->draw()) . PHP_EOL;

    $rectangle = new Rectangle(4, 3);
    echo htmlspecialchars($rectangle->draw()) . PHP_EOL;

    $rectangle = new Rectangle(8, 3);
    $rectangle->setContentInsideBox('John Doe Lorem Ipsum Dolor Sit Amet');
    echo htmlspecialchars($rectangle->draw()) . PHP_EOL;

    $rectangle = new Rectangle(2, 16);
    $rectangle->setContentInsideBox('by terremoth and friends');
    echo htmlspecialchars($rectangle->draw($doubleBorder)) . PHP_EOL;
} catch (SideLessThanOneException $e) {
    echo htmlspecialchars($e->getMessage());
}
