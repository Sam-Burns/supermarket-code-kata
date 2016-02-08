<?php
namespace SamBurns\SupermarketCodeKata\Item;

use SamBurns\SupermarketCodeKata\ItemInterface;

class Drink implements ItemInterface
{
    public function getUnitCost()
    {
        return 0.99;
    }
}
