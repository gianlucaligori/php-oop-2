<?php

include __DIR__ . "./products.php";



class Animals
{
    public $species;
    public $size;
    public $type;



    public function __construct($size, $species, $type)
    {
        $this->species = $species;
        $this->size = $size;
        $this->type = $type;
    }
}
