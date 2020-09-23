<?php

namespace DesignPatterns\Flyweight\Shapes;

abstract class AbstractShape implements ShapeInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * AbstractShape constructor.
     *
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * @param int $x
     * @param int $y
     */
    abstract public function draw(int $x, int $y): void;
}