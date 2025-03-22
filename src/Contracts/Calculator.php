<?php

namespace AuroraWebSoftware\Shoppingcart\Contracts;

use AuroraWebSoftware\Shoppingcart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}
