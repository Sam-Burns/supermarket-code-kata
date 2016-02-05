<?php
namespace SamBurns\SupermarketCodeKata;

class ItemPrice
{
    private $priceAsFloat;

    public function __construct(float $priceAsFloat)
    {
        $this->priceAsFloat = $priceAsFloat;
    }

    public function toFloat() : float
    {
        return $this->priceAsFloat;
    }
}
