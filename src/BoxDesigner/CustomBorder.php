<?php

namespace BoxDesigner;

class CustomBorder implements BorderInterface
{
    /**
     * @param string $topLeft
     * @param string $topRight
     * @param string $bottomLeft
     * @param string $bottomRight
     * @param string $horizontalLine
     * @param string $verticalLine
     */
    public function __construct(
        private string $topLeft,
        private string $topRight,
        private string $bottomLeft,
        private string $bottomRight,
        private string $horizontalLine,
        private string $verticalLine
    ) {
    }


    /**
     * @param string $topLeft
     * @return CustomBorder
     */
    public function setTopLeft(string $topLeft): CustomBorder
    {
        $this->topLeft = $topLeft;
        return $this;
    }

    /**
     * @param string $topRight
     * @return CustomBorder
     */
    public function setTopRight(string $topRight): CustomBorder
    {
        $this->topRight = $topRight;
        return $this;
    }

    /**
     * @param string $bottomLeft
     * @return CustomBorder
     */
    public function setBottomLeft(string $bottomLeft): CustomBorder
    {
        $this->bottomLeft = $bottomLeft;
        return $this;
    }

    /**
     * @param string $bottomRight
     * @return CustomBorder
     */
    public function setBottomRight(string $bottomRight): CustomBorder
    {
        $this->bottomRight = $bottomRight;
        return $this;
    }

    /**
     * @param string $horizontalLine
     * @return CustomBorder
     */
    public function setHorizontalLine(string $horizontalLine): CustomBorder
    {
        $this->horizontalLine = $horizontalLine;
        return $this;
    }

    /**
     * @param string $verticalLine
     * @return CustomBorder
     */
    public function setVerticalLine(string $verticalLine): CustomBorder
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
