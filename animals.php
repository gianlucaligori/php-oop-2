<?php

include __DIR__ . '/products.php';

class Animals
{
    public $species;
    public $size;
    public $image;


    public function __construct($species, $size, $image)
    {
        $this->species = $species;
        $this->size = $size;
        $this->image = $image;
    }
}
