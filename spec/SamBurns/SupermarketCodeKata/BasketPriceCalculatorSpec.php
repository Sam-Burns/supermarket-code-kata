<?php

namespace spec\SamBurns\SupermarketCodeKata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BasketPriceCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SamBurns\SupermarketCodeKata\BasketPriceCalculator');
    }
}
