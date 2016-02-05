<?php
namespace spec\SamBurns\SupermarketCodeKata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ItemPriceSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(2.99);
    }

    function it_can_return_its_price_as_a_float()
    {
        $this->toFloat()->shouldBe(2.99);
    }
}
