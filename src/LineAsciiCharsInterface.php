<?php

declare(strict_types=1);

namespace RectanglesDrawerTdd;

interface LineAsciiCharsInterface
{
    public function topLeft() : string;
    public function topRight() : string;
    public function bottomLeft() : string;
    public function bottomRight() : string;
    public function horizontalLine() : string;
    public function verticalLine() : string;
}