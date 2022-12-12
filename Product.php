<?php

/**
 * class Product
 * @param String name
 * @param String description
 * @param Integer price
 * @param Category categories
 * @param String brand
 */
class Product
{
    function __construct(
        public String $name,
        public String $descrption,
        public int $price,
        public Category $categories,
        public String $brand
    ) {
    }
}
