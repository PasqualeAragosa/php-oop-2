<?php

/**
 * class Product
 * @param String name
 * @param String description
 * @param String price
 * @param Category categories
 * @param Type type
 * @param String brand
 */
class Product
{
    public $name;
    public $price;
    public $descrption;
    public $categories;
    public $brand;
    public $type;

    public function __construct(
        String $name,
        String $descrption,
        String $price,
        Category $categories,
        Type $type,
        String $brand
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
        $this->type = $type;
        $this->descrption = $descrption;
        $this->brand = $brand;
    }
}
