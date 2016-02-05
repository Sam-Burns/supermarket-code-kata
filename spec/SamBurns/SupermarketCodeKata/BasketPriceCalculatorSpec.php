<?php
namespace spec\SamBurns\SupermarketCodeKata;

use PhpSpec\ObjectBehavior;
use PhpSpec\Wrapper\Subject;
use Prophecy\Argument;
use SamBurns\SupermarketCodeKata\Item\Crisps;
use SamBurns\SupermarketCodeKata\BasketPriceCalculator;
use SamBurns\SupermarketCodeKata\Item\Drink;
use SamBurns\SupermarketCodeKata\Item\Sandwich;

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
        // Add a single item
        $this->addItem(new Crisps());

        // Test total price
        $this->getTotalPrice()->shouldBe(0.50);
    }

    function it_can_calculate_the_price_of_several_items()
    {
        // Add various items
        $this->addItem(new Crisps());
        $this->addItem(new Crisps());
        $this->addItem(new Drink());

        // Test total price
        $this->getTotalPrice()->shouldBe(1.99);
    }

    function it_knows_about_the_meal_deal()
    {
        // Add meal deal
        $this->addItem(new Sandwich());
        $this->addItem(new Crisps());
        $this->addItem(new Drink());

        // Test total price
        $this->getTotalPrice()->shouldBe(3.00);
    }

    function it_can_calculate_prices_for_a_meal_deal_and_extra_stuff()
    {
        // Add meal deal
        $this->addItem(new Sandwich());
        $this->addItem(new Crisps());
        $this->addItem(new Drink());

        // Add extra stuff
        $this->addItem(new Drink());

        // Test total price
        $this->getTotalPrice()->shouldBe(3.99);
    }
}
