<?php

class Product
{
    public $nameProduct;
    public  $price;
    public  $type;
    public $image;

    public function __construct($nameProduct, $price, $type, $image)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->type = $type;
        $this->image = $image;
    }
}
