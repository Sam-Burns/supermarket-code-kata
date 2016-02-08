<?php

namespace SamBurns\SupermarketCodeKata;

interface PriceRule
{
    public function getPrice(ItemInterface $item);
}