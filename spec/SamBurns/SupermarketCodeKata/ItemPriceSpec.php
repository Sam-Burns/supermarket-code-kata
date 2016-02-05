<?php

namespace spec\SamBurns\SupermarketCodeKata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ItemPriceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SamBurns\SupermarketCodeKata\ItemPrice');
    }
}
