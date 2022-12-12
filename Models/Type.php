<?php

class Type
{
    public function __construct(public $name)
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
