<?php

namespace Reflection;

class Glass
{
    private $isBroken = false;

    public function break()
    {
        $this->isBroken = true;

        return $this;
    }
}
