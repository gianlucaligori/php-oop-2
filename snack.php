<?php

class Snack extends Product
{
    public int $weight;



    public function __construct($nameProduct, $price, $type, $weight, $image)
    {
        parent::__construct($nameProduct, $price, $type, $image);
        $this->weight = $weight;
    }
}
