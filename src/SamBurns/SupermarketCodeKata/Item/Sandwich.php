<?php
namespace SamBurns\SupermarketCodeKata\Item;

use SamBurns\SupermarketCodeKata\ItemInterface;

class Sandwich implements ItemInterface
{
    public function getUnitCost() : float
    {
        return 2.50;
    }
}
