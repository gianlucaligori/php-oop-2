<?php

class kennels
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


$kennelsDog = new Product('Casetta in legno', '100.59', 'Per Cani');
$kennelsCat = new Product('Cuscino', '40.99', 'Per Gatto');
