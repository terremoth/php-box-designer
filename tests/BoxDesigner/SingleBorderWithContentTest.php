<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use BoxDesigner\PreBuilt\SingleLineBorder;
use BoxDesigner\Box;
use BoxDesigner\SideLessThanOneException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Box::class)]
#[UsesClass(SingleLineBorder::class)]
final class SingleBorderWithContentTest extends TestCase
{
    /**
     * @return array[]
     */
    public static function boxValuesProvider(): array
    {
        return [
            [
                "┌─┐" . PHP_EOL .
                "│A│" . PHP_EOL .
                "└─┘",
                1,1, 'A'
            ],
            [
                "┌──┐" . PHP_EOL .
                "│hi│" . PHP_EOL .
                "└──┘",
                2, 1, 'hi'
            ],
            [
                "┌──┐" . PHP_EOL .
                "│Oh│" . PHP_EOL .
                "│io│" . PHP_EOL .
                "└──┘",
                2,2, 'Ohio'
            ],
            [
                "┌───┐" . PHP_EOL .
                "│ ba│" . PHP_EOL .
                "│ng │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "└───┘",
                3,3, ' bang '
            ],
            [
                "┌──────┐" . PHP_EOL .
                "│      │" . PHP_EOL .
                "│      │" . PHP_EOL .
                "└──────┘",
                6,2,' '
            ],
            [
                "┌───────────────┐" . PHP_EOL .
                "│by terremoth an│" . PHP_EOL .
                "│d friends      │" . PHP_EOL .
                "└───────────────┘",
                15, 2, 'by terremoth and friends'
            ],
            [
                "┌───┐" . PHP_EOL .
                "│Lor│" . PHP_EOL .
                "│em │" . PHP_EOL .
                "│ips│" . PHP_EOL .
                "│um │" . PHP_EOL .
                "└───┘",
                3, 4, 'Lorem ipsum dolor sit amet'
            ],
            [
                "┌────────┐" . PHP_EOL .
                "│The     │" . PHP_EOL .
                "│bests of│" . PHP_EOL .
                "│ the   w│" . PHP_EOL .
                "│orld    │" . PHP_EOL .
                "└────────┘",
                8, 4, "The\nbests of the   world"
            ]
        ];
    }

    /**
     * @throws SideLessThanOneException
     */
    #[DataProvider('boxValuesProvider')]
    public function testSidesLessThanOne(string $box, int $columns, int $rows, string $content): void
    {
        $rectangle = new Box($columns, $rows);
        $rectangle->setContentInsideBox($content);
        $draw = $rectangle->draw();
        self::assertEquals($box, $draw);
    }
}
