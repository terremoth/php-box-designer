<?php

declare(strict_types=1);

namespace BoxDrawer\Tests;

use PHPUnit\Framework\TestCase;

use BoxDrawer\Rectangle;

class SingleLineRectanglesDrawingTest extends TestCase
{

    public function boxValuesProvider()
    {
        return [
            [
                "┌─┐".PHP_EOL.
                "│ │".PHP_EOL.
                "└─┘",
                1,1
            ],
            [
                "┌──┐".PHP_EOL.
                "│  │".PHP_EOL.
                "└──┘",
                1,2
            ],
            [
                "┌──┐".PHP_EOL.
                "│  │".PHP_EOL.
                "│  │".PHP_EOL.
                "└──┘",
                2,2       
            ],
            [
                "┌───┐".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "└───┘",
                3,3
            ],
            [
                "┌──────┐".PHP_EOL.
                "│      │".PHP_EOL.
                "│      │".PHP_EOL.
                "└──────┘",
                2,6
            ],
            [
                "┌───────────────┐".PHP_EOL.
                "│               │".PHP_EOL.
                "│               │".PHP_EOL.
                "└───────────────┘",
                2,15
            ],
            [
                "┌───┐".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "└───┘",
                4,3
            ]
           
        ];
    }

    /**
     * @dataProvider boxValuesProvider
     */
    public function testSidesLessThanOne($box, $rows, $columns)
    {
        $rectangle = new Rectangle($rows, $columns);
        $this->assertEquals($box, $rectangle->draw());
    }
    
}