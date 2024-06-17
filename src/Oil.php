<?php

namespace Reflection;

class Oil
{
    private $glasses = array();

    public function isEmpty()
    {
        return empty($this->glasses);
    }

    public function put(Glass $glass)
    {
        $this->glasses[] = $glass;
    }

    public function getBrokenIndexes()
    {
        // Your code goes here
    }
}
