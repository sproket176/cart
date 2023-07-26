<?php
declare(strict_types=1);

namespace Cart\Provider;

use Cart\Cart;
use Cart\CartItem;

class CartProvider extends AbstractCartProvider
{
    /**
     * @return Cart
     */
    public function getCart(): Cart
    {
        if (!isset($_SESSION['cart']))
            return new Cart(0, 'PLN', []);

        $cartFromSession = json_decode($_SESSION['cart'], true);

        $cart = new Cart(0, $cartFromSession['cart']['currency'], []);

        /**
         * Tutaj powinien być jeszcze walidator, który sprawdzi poprawność danych przekazanych z sesji.
         * Jeżeli nie będą poprawne, powinien rzucić wyjątek.
         * Nie zrobiłem tego z powodu rosnących testów. Musiałbym przetestować także walidator, a w zadaniu nic o tym nie było.
         */
        foreach ($cartFromSession['cart']['items'] as $item) {
            $cart->addItem(new CartItem($item['name'], $item['price'], $item['quantity']));
        }

        return $cart;
    }
}