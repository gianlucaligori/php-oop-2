<?php

class Games extends Product
{
    public  $nameGame;




    public function __construct($nameProduct, $price, $type, $nameGame)
    {
        parent::__construct($nameProduct, $price, $type);
        $this->nameGame = $nameGame;
    }
}
