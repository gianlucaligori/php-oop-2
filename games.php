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


$gameDog = new Product('Osso di gomma', '5,99', 'Per Cani');
$gameCat = new Product('tiragraffi', '42.99', 'Per Gatto');
