<?php

namespace SamBurns\SupermarketCodeKata;

use SamBurns\SupermarketCodeKata\Item\Sandwich;

class HalfPriceSandwichAfter5PM implements PriceRule
{
    public function getPrice(ItemInterface $item)
    {
        // is it a sandwich and is it after 5pm (17)
        $now = new \DateTime();
        if ($item instanceof Sandwich && $now->format('M') >= 17) {
            return $item->getUnitCost() / 2;
        }

        // standard price
        return $item->getUnitCost();
    }
}