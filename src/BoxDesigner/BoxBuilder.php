<?php

namespace BoxDesigner;

class BoxBuilder implements LineAsciiCharsInterface
{
    private string $topLeft;
    private string $topRight;
    private string $bottomLeft;
    private string $bottomRight;
    private string $horizontalLine;
    private string $verticalLine;

    /**
     * @param string $topLeft
     * @return BoxBuilder
     */
    public function setTopLeft(string $topLeft): BoxBuilder
    {
        $this->topLeft = $topLeft;
        return $this;
    }

    /**
     * @param string $topRight
     * @return BoxBuilder
     */
    public function setTopRight(string $topRight): BoxBuilder
    {
        $this->topRight = $topRight;
        return $this;
    }

    /**
     * @param string $bottomLeft
     * @return BoxBuilder
     */
    public function setBottomLeft(string $bottomLeft): BoxBuilder
    {
        $this->bottomLeft = $bottomLeft;
        return $this;
    }

    /**
     * @param string $bottomRight
     * @return BoxBuilder
     */
    public function setBottomRight(string $bottomRight): BoxBuilder
    {
        $this->bottomRight = $bottomRight;
        return $this;
    }

    /**
     * @param string $horizontalLine
     * @return BoxBuilder
     */
    public function setHorizontalLine(string $horizontalLine): BoxBuilder
    {
        $this->horizontalLine = $horizontalLine;
        return $this;
    }

    /**
     * @param string $verticalLine
     * @return BoxBuilder
     */
    public function setVerticalLine(string $verticalLine): BoxBuilder
    {
        $this->verticalLine = $verticalLine;
        return $this;
    }

    public function topLeft(): string
    {
        return $this->topLeft;
    }

    public function topRight(): string
    {
        return $this->topRight;
    }

    public function bottomLeft(): string
    {
        return $this->bottomLeft;
    }

    public function bottomRight(): string
    {
        return $this->bottomRight;
    }

    public function horizontalLine(): string
    {
        return $this->horizontalLine;
    }

    public function verticalLine(): string
    {
        return $this->verticalLine;
    }
}
