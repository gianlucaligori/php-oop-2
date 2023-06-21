<?php

class Snack extends Product
{
    public int $weight;



    public function __construct($nameProduct, $price, $type, $weight)
    {
        parent::__construct($nameProduct, $price, $type);
        $this->weight = $weight;
    }
}
