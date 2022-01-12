<?php

namespace App\Prototype;

class FemalePrototype extends AbstractHumanPrototype
{
    protected string $genre = 'Female';

    public function __clone()
    {
    }
}