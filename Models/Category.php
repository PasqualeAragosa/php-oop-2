<?php

class Category
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }
    public function set_name($name)
    {
        $this->name = $name;
    }
}
