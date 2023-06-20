<?php

class snack
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


$snackDog = new Product('Barrette', ' 19.99', 'Per cani');
$snackCat = new Product('Biscotti', '15.99', 'Per Gatto');
