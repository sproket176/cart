<?php
declare(strict_types=1);

namespace Tests\Cart\Provider;

use Cart\CartItem;
use PHPUnit\Framework\TestCase;

class CartItemTest extends TestCase
{
    public function testCartItemsCreate(): void
    {
        $exampleItems = [
            ['name' => 'Koszula', 'price' => 100, 'quantity' => 1],
            ['name' => 'Spodnie', 'price' => 600, 'quantity' => 3]
        ];

        foreach ($exampleItems as $item) {
            $cartItem = new CartItem($item['name'], $item['price'], $item['quantity']);

            $this->assertEquals($item['name'], $cartItem->getName());
            $this->assertEquals($item['price'], $cartItem->getPrice());
            $this->assertEquals($item['quantity'], $cartItem->getQuantity());
        }
    }
}