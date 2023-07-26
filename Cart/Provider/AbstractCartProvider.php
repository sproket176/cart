<?php
declare(strict_types=1);

namespace Cart\Provider;

use Cart\Cart;

abstract class AbstractCartProvider
{
    abstract function getCart(): Cart;
}