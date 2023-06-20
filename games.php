<?php


class games
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


$gameDog = new games('Osso di gomma', '5,99', 'Per Cani');
$gameCat = new games('tiragraffi', '42.99', 'Per Gatto');
