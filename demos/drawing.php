<?php

require_once __DIR__ . '/../vendor/autoload.php';

use BoxDesigner\CustomBorder;
use BoxDesigner\PreBuilt\DarkerBorder;
use BoxDesigner\PreBuilt\DoubleLineBorder;
use BoxDesigner\Box;
use BoxDesigner\SideLessThanOneException;

$doubleBorder = new DoubleLineBorder();
$darkerBorder = new DarkerBorder();

$output_filtered = fn(string $input): string => htmlspecialchars($input, ENT_QUOTES, 'UTF-8') . PHP_EOL;

try {
    $box = new Box(1, 1);
    echo $output_filtered($box->draw());


    $box = new Box(1, 1);
    $single = $box->draw();

    $box = new Box(3, 3);
    $box->setContentInsideBox($single);
    $double = $box->draw($doubleBorder);

    $box = new Box(5, 5);
    $box->setContentInsideBox($double);
    echo $output_filtered($box->draw($darkerBorder));

    $customBorder = new CustomBorder('*', '*', '*', '*', '-', '|');
    $box = new Box(8, 3);
    echo $output_filtered($box->draw($customBorder));

    $box = new Box(10, 1);
    echo $output_filtered($box->draw());

    $box = new Box(8, 3);
    $box->setContentInsideBox('John Doe Lorem Ipsum Dolor Sit Amet');
    echo $output_filtered($box->draw());

    $box = new Box(16, 2);
    $box->setContentInsideBox("by terremoth\nand friends");
    echo $output_filtered($box->draw());

    $box = new Box(2, 2);
    $draw = $output_filtered($box->draw());

    $box = new Box(4, 4);
    $box->setContentInsideBox($draw);
    $output_filtered($box->draw($doubleBorder));

    echo $output_filtered($box->draw($doubleBorder));
} catch (SideLessThanOneException $e) {
    echo $output_filtered($e->getMessage());
}//end try
