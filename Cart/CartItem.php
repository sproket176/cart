<?php
declare(strict_types=1);

namespace Cart;

class CartItem
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $price;

    /**
     * @var int
     */
    private int $quantity;

    /**
     * @param string $name
     * @param int $price
     * @param int $quantity
     */
    public function __construct(string $name, int $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
}