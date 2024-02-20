<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use PHPUnit\Framework\TestCase;

use BoxDesigner\Rectangle;
use BoxDesigner\SideLessThanOneException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\UsesClass;

#[UsesClass(Rectangle::class)]
#[CoversClass(SideLessThanOneException::class)]
#[CoversClass(Rectangle::class)]
final class SideLessThanOneExceptionTest extends TestCase
{

    public static function lessThanOneValuesProvider()
    {
        return [
            [-4, 8],
            [ 0, 0],
            [ 1, 0],
            [ 2, -5],
            [ 0, 1]
        ];
    }

    #[DataProvider('lessThanOneValuesProvider')]
    public function testSidesLessThanOne($row, $column)
    {
        $this->expectException(SideLessThanOneException::class);
        new Rectangle($row, $column);
    }
    
}