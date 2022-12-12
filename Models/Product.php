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
    public function __construct(
        public String $name,
        public String $descrption,
        public String $price,
        public Category $categories,
        public Type $type,
        public String $brand
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
        $this->type = $type;
        $this->descrption = $descrption;
        $this->brand = $brand;
    }
}
