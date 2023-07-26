<?php
declare(strict_types=1);

namespace Tests\Cart\Provider;

use Cart\Cart;
use Cart\CartItem;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testCartAddItem(): void
    {
        $cart = new Cart(0, 'PLN', []);
        $cart->addItem(new CartItem('Testowy ciuszek', 1000, 1));

        $this->assertEquals(
            new Cart(1000, 'PLN', [new CartItem('Testowy ciuszek', 1000, 1)]),
            $cart
        );
    }
}