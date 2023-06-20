<?php

class food
{
    public string $name;
    public int $price;
    public string $category;
    public int $weight;



    public function __construct($name, $price, $category, $weight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->weight = $weight;
    }
}


$foodDog = new food('crocchette di manzo', '25.99', 'Per Cani', 300);
$foodCat = new food('crocchette di pesce', '15.99', 'Per Gatto', 200);
