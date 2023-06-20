<?php

class food
{
    public $name;
    public $price;
    public $category;

    public function __construct($name, $price, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
}


$foodDog = new Product('crocchette di manzo', '25.99', 'Per Cani');
$foodCat = new Product('crocchette di pesce', '15.99', 'Per Gatto');
