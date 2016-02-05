<?php
namespace spec\SamBurns\SupermarketCodeKata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SamBurns\SupermarketCodeKata\ItemPrice;
use SamBurns\SupermarketCodeKata\BasketPriceCalculator;

/**
 * @mixin BasketPriceCalculator
 */
class BasketPriceCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SamBurns\SupermarketCodeKata\BasketPriceCalculator');
    }

    function it_can_calculate_the_price_of_a_single_item()
    {
        $itemPrice = new ItemPrice(2.99);

        $this->addItemsAtPrice(1, $itemPrice);

        $this->getTotalPrice()->shouldBe(5.98);
    }
}
