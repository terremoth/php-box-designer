<?php

const DS = DIRECTORY_SEPARATOR;
require_once __DIR__ . DS . '..' . DS . 'vendor' . DS . 'autoload.php';

use BoxDesigner\DoubleLineBorder;
use BoxDesigner\Rectangle;
use BoxDesigner\SideLessThanOneException;

$doubleBorder = new DoubleLineBorder();

try {
    $rectangle = new Rectangle(1, 1);
    echo $rectangle->draw() . PHP_EOL;

    $rectangle = new Rectangle(2, 2);
    echo $rectangle->draw() . PHP_EOL;

    $rectangle = new Rectangle(3, 3);
    echo $rectangle->draw($doubleBorder) . PHP_EOL;

    $rectangle = new Rectangle(2, 6);
    echo $rectangle->draw() . PHP_EOL;

    $rectangle = new Rectangle(3, 15);
    echo $rectangle->draw() . PHP_EOL;

    $rectangle = new Rectangle(1, 10);
    echo $rectangle->draw() . PHP_EOL;

    $rectangle = new Rectangle(10, 1);
    echo $rectangle->draw() . PHP_EOL;

    $rectangle = new Rectangle(4, 3);
    echo $rectangle->draw() . PHP_EOL;

    $rectangle = new Rectangle(8, 3);
    $rectangle->setContentInsideBox('John Doe Lorem Ipsum Dolor Sit Amet');
    echo $rectangle->draw() . PHP_EOL;

    $rectangle = new Rectangle(2, 16);
    $rectangle->setContentInsideBox('by terremoth and friends');
    echo $rectangle->draw($doubleBorder) . PHP_EOL;
} catch (SideLessThanOneException $e) {
    echo $e->getMessage();
}
