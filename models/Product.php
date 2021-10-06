<?php

/** class Product
 * @param string $name
 * @param float $price
 * @param string $color
 */

class Product
{
    protected $name;
    protected $price;
    protected $color;

    public function __construct($name, $price, $color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getColor()
    {
        return $this->color;
    }
}
