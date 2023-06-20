<?php

class kennels
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


$kennelsDog = new kennels('Casetta in legno', '100.59', 'Per Cani');
$kennelsCat = new kennels('Cuscino', '40.99', 'Per Gatto');
