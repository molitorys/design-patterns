<?php

namespace DesignPatterns\Flyweight\Shapes;

class ShapeFactory
{
    private static array $shapesByColor = [];

    /**
     * @throws \Exception
     */
    public static function getShape(string $type, string $color): ShapeInterface
    {
        $key = $type.'_'.$color;

        if(isset(self::$shapesByColor[$key])) {
            return self::$shapesByColor[$key];
        }

        self::$shapesByColor[$key] = match ($type) {
            'rectangle' => new Rectangle($color),
            'circle' => new Circle($color),
            default => throw new \Exception('Shape is not defined fpr type: ' . $type),
        };

        return self::$shapesByColor[$key];
    }
}