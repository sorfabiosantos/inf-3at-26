<?php

namespace source\Models;

class Product
{
    private $id;
    private $name;

    public function __construct(int $id = null, string $name = null)
    {
        $this->id = $id;
        $this->name = $name;
    }

}