<?php

namespace App\Prototype;

class MalePrototype extends AbstractHumanPrototype
{
    protected string $genre = 'Male';

    public function __clone()
    {
    }
}