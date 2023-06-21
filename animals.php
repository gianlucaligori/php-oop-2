<?php

include __DIR__ . '/products.php';

class Animals
{
    public $species;
    public $size;


    public function __construct($species, $size,)
    {
        $this->species = $species;
        $this->size = $size;
    }
}
