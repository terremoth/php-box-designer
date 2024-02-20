<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\CoversClass;

use BoxDesigner\Rectangle;
use BoxDesigner\SingleLineBorder;
use PHPUnit\Framework\Attributes\UsesClass;

#[CoversClass(Rectangle::class)]
#[UsesClass(SingleLineBorder::class)]
final class SingleLineRectangleDrawingWithContentTest extends TestCase
{

    /**
     * @return array[[string, int, int, string]]
     */
    public static function boxValuesProvider() : array
    {
        return [
            [
                "┌─┐".PHP_EOL.
                "│A│".PHP_EOL.
                "└─┘",
                1,1,'A'
            ],
            [
                "┌──┐".PHP_EOL.
                "│hi│".PHP_EOL.
                "└──┘",
                1,2,'hi'
            ],
            [
                "┌──┐".PHP_EOL.
                "│Oh│".PHP_EOL.
                "│io│".PHP_EOL.
                "└──┘",
                2,2,'Ohio'       
            ],
            [
                "┌───┐".PHP_EOL.
                "│ ba│".PHP_EOL.
                "│ng │".PHP_EOL.
                "│   │".PHP_EOL.
                "└───┘",
                3,3,' bang '
            ],
            [
                "┌──────┐".PHP_EOL.
                "│      │".PHP_EOL.
                "│      │".PHP_EOL.
                "└──────┘",
                2,6,' '
            ],
            [
                "┌───────────────┐".PHP_EOL.
                "│by terremoth an│".PHP_EOL.
                "│d friends      │".PHP_EOL.
                "└───────────────┘",
                2,15,'by terremoth and friends'
            ],
            [
                "┌───┐".PHP_EOL.
                "│Lor│".PHP_EOL.
                "│em │".PHP_EOL.
                "│ips│".PHP_EOL.
                "│um │".PHP_EOL. 
                "└───┘",
                4,3,'Lorem ipsum dolor sit amet'
            ]
           
        ];
    }

    #[DataProvider('boxValuesProvider')]
    public function testSidesLessThanOne(string $box, int $rows, int $columns, string $content) : void
    {
        $rectangle = new Rectangle($rows, $columns);
        $rectangle->setContentInsideBox($content);
        $draw = $rectangle->draw();
        $this->assertEquals($box, $draw);
    }
    
}