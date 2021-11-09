<?php 

class Item
{
    private $name;
    private $price; 

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price; 
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public static function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

}