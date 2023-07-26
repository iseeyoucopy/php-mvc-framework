<?php

namespace iseeyoucopy\phpmvc\models;

class Basket
{
    private array $items = [];

    public function addProduct($productID, $quantity): void
    {
        if (!array_key_exists($productID, $this->items)) {
            $this->items[$productID] = $quantity;
        } else {
            $this->items[$productID] += $quantity;
        }
    }

    public function getItems(): array
    {
        return $this->items;
    }
}