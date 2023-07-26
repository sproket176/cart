<?php
declare(strict_types=1);

namespace Cart;

class Cart
{
    /**
     * @var int
     */
    private int $amount;

    /**
     * @var string
     */
    private string $currency;

    /**
     * @var array
     */
    private array $items;

    /**
     */
    public function __construct(int $amount, string $currency, array $items)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->items = $items;
    }

    /**
     * @param CartItem $cartItem
     * @return $this
     */
    public function addItem(CartItem $cartItem): Cart
    {
        $this->amount += $cartItem->getPrice() * $cartItem->getQuantity();
        $this->items[] = $cartItem;

        return $this;
    }

    /**
     * Poniższe gettery nie są nigdzie użyte aktualnie, mogą być uważane za nadmiarowe, jednak przy rozwoju
     * w przyszłości modułu koszyka na pewno zostałyby użyte. Stworzyłem je od razu,
     * bo PHPStorm podkreślał zadeklarowane, ale nieużyte.
     */

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}