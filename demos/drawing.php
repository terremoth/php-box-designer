<?php

use BoxDrawer\Rectangle;

require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$rectangle = new Rectangle(1,1);
echo $rectangle->draw().PHP_EOL;

$rectangle = new Rectangle(2,2);
echo $rectangle->draw().PHP_EOL;

$rectangle = new Rectangle(3,3);
echo $rectangle->draw().PHP_EOL;

$rectangle = new Rectangle(2,6);
echo $rectangle->draw().PHP_EOL;

$rectangle = new Rectangle(3,15);
echo $rectangle->draw().PHP_EOL;

$rectangle = new Rectangle(1,10);
echo $rectangle->draw().PHP_EOL;

$rectangle = new Rectangle(10,1);
echo $rectangle->draw().PHP_EOL;

$rectangle = new Rectangle(4,3);
echo $rectangle->draw().PHP_EOL;

