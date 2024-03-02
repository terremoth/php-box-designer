<?php

namespace BoxDesigner;

class DarkerBorder implements BorderInterface
{
    public function topLeft(): string
    {
        return '╔';
    }

    public function topRight(): string
    {
        return '╗';
    }

    public function bottomLeft(): string
    {
        return '╚';
    }

    public function bottomRight(): string
    {
        return '╝';
    }

    public function horizontalLine(): string
    {
        return '═';
    }

    public function verticalLine(): string
    {
        return '║';
    }
}
