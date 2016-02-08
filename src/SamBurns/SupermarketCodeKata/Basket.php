<?php

namespace SamBurns\SupermarketCodeKata;

class Basket
{
    /**
     * @var ItemInterface
     */
    private $items;

    /**
     * @var PriceRule
     */
    private $priceRule;

    /**
     * Basket constructor.
     */
    public function __construct()
    {
        $this->priceRule = new DealMeal();
        //$this->priceRile = new HalfPriceSandwichAfter5PM();
    }

    public function addItem(ItemInterface $item)
    {
        $this->items[] = $item;
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $this->priceRule->getPrice($item);
        }
        return $totalPrice;
    }
}
