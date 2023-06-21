<?php

class Product
{
    public $nameProduct;
    public  $price;
    public  $type;

    public function __construct($nameProduct, $price, $type)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->type = $type;
    }
}
