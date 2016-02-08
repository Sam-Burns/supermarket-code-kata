<?php

namespace SamBurns\SupermarketCodeKata;
use SamBurns\SupermarketCodeKata\Item\Crisps;
use SamBurns\SupermarketCodeKata\Item\Drink;
use SamBurns\SupermarketCodeKata\Item\Sandwich;

/**
 * Price Rule
 *
 * Counts how many 3 of each
 */
class DealMeal implements PriceRule
{
    /**
     * @var int
     */
    private $crisps = 0;

    /**
     * @var int
     */
    private $drinks = 0;

    /**
     * @var int
     */
    private $sandwiches = 0;

    public function getPrice(ItemInterface $item)
    {
        if ($item instanceof Crisps) {
            $this->crisps++;
        }

        if ($item instanceof Drink) {
            $this->drinks++;
        }

        if ($item instanceof Sandwich) {
            $this->sandwiches++;
        }

        // have we reach one of each
        if ($this->crisps > 0 && $this->drinks > 0 && $this->sandwiches > 0) {

            // marked as applied
            $this->crisps--;
            $this->drinks--;
            $this->sandwiches--;

            // return this item price and apply discount
            return $item->getUnitCost() - 0.99;
        }

        return $item->getUnitCost();
    }
}