<?php
namespace SamBurns\SupermarketCodeKata\Item;

use SamBurns\SupermarketCodeKata\ItemInterface;

class Crisps implements ItemInterface
{
    public function getUnitCost() : float
    {
        return 0.50;
    }
}
