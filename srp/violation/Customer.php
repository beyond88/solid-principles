<?php 
include 'Item.php';

class Customer 
{

    private $name;
    private $age;
    private $items;
    private $numberOfPlusticBags;
    private $plusticBagPrice = 2.00;

    public function __construct($name, $age, $items, $numberOfPlusticBags)
    {
        $this->name = $name;
        $this->age = $age;
        $this->items = $items;
        $this->numberOfPlusticBags = $numberOfPlusticBags;
    }

    public function calculatePrice($tax)
    {
        $totalItems = count($this->items);
        $itemPrice = Item::getPrice();
    }

}