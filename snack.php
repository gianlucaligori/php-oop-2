<?php

class snack
{
    public string $name;
    public int $price;
    public string $category;

    public function __construct($name, $price, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
}


$snackDog = new snack('Barrette', ' 19.99', 'Per cani');
$snackCat = new snack('Biscotti', '15.99', 'Per Gatto');
