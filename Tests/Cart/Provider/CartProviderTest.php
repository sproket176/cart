<?php
declare(strict_types=1);

namespace Tests\Cart\Provider;

use Cart\Cart;
use Cart\CartItem;
use Cart\Provider\CartProvider;
use PHPUnit\Framework\TestCase;

class CartProviderTest extends TestCase
{
    private string $exampleSession;

    public function setUp(): void
    {
        $this->exampleSession = '{"cart":{"amount":120,"currency":"PLN","items":[{"name":"Koszulka z bufiastymi rękawami","price":100,"quantity":1},{"name":"Gumka do włosów","price":10,"quantity":2}]}}';
    }

    public function testGetCartEmptySession(): void
    {
        $cartProvider = new CartProvider();
        $_SESSION = [];
        $cart = $cartProvider->getCart();

        $this->assertEquals($cart, new Cart(0, 'PLN', []));
    }

    public function testGetCartWithSession(): void
    {
        $cartProvider = new CartProvider();

        /**
         * Tutaj, zamiast bezpośrednio wklejać zawartość sesji, moglibyśmy stworzyć klasę SessionManager
         * i użyć jego mocka w celu stworzenia testowalnego kodu.
         */
        $_SESSION['cart'] = $this->exampleSession;
        $cart = $cartProvider->getCart();

        $expectedCart = new Cart(0, 'PLN', []);
        $expectedCart->addItem(new CartItem('Koszulka z bufiastymi rękawami', 100, 1));
        $expectedCart->addItem(new CartItem('Gumka do włosów', 10, 2));

        $this->assertEquals($cart, $expectedCart);
    }
}