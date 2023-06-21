<?php

class Food extends Product
{

    public  $weight;

    public function __construct($nameProduct, $price, $type, $weight,)
    {
        parent::__construct($nameProduct, $price, $type);
        $this->weight = $weight;
    }
}
