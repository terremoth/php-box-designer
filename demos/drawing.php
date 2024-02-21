<?php

require_once __DIR__ . '/../vendor/autoload.php';

use BoxDesigner\DoubleLineBorder;
use BoxDesigner\Rectangle;
use BoxDesigner\SideLessThanOneException;

$doubleBorder = new DoubleLineBorder();

$output_filtered = fn(string $input): string => htmlspecialchars($input, ENT_QUOTES, 'UTF-8') . PHP_EOL;

try {
    $rectangle = new Rectangle(1, 1);
    echo $output_filtered($rectangle->draw());

    $rectangle = new Rectangle(2, 2);
    echo $output_filtered($rectangle->draw());

    $rectangle = new Rectangle(3, 3);
    echo $output_filtered($rectangle->draw($doubleBorder));

    $rectangle = new Rectangle(2, 6);
    echo $output_filtered($rectangle->draw());

    $rectangle = new Rectangle(3, 15);
    echo $output_filtered($rectangle->draw());

    $rectangle = new Rectangle(1, 10);
    echo $output_filtered($rectangle->draw());

    $rectangle = new Rectangle(10, 1);
    echo $output_filtered($rectangle->draw());

    $rectangle = new Rectangle(4, 3);
    echo $output_filtered($rectangle->draw());

    $rectangle = new Rectangle(8, 3);
    $rectangle->setContentInsideBox('John Doe Lorem Ipsum Dolor Sit Amet');
    echo $output_filtered($rectangle->draw());

    $rectangle = new Rectangle(2, 16);
    $rectangle->setContentInsideBox('by terremoth and friends');
    echo $output_filtered($rectangle->draw($doubleBorder));
} catch (SideLessThanOneException $e) {
    echo $output_filtered($e->getMessage());
}//end try

