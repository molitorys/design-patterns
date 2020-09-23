<?php

namespace DesignPatterns\Flyweight\Shapes;

class ShapeFactory
{
    /**
     * @var array
     */
    private static $shapesByColor = [];

    /**
     * @param string $type
     * @param string $color
     * @return ShapeInterface
     * @throws \Exception
     */
    public static function getShape(string $type, string $color): ShapeInterface
    {
        $key = $type.'_'.$color;

        if(isset(self::$shapesByColor[$key])) {
            return self::$shapesByColor[$key];
        }

        switch ($type) {
            case 'rectangle':
                self::$shapesByColor[$key] = new Rectangle($color);
                break;
            case 'circle':
                self::$shapesByColor[$key] = new Circle($color);
                break;
            default:
                throw new \Exception('Shape is not defined fpr type: ' . $type);
        }

        return self::$shapesByColor[$key];
    }
}