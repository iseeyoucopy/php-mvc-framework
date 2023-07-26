<?php

namespace iseeyoucopy\phpmvc\models;

class Basket
{
    private $items = [];

    public function addProduct($productID, $quantity)
    {
        if (!array_key_exists($productID, $this->items)) {
            $this->items[$productID] = $quantity;
        } else {
            $this->items[$productID] += $quantity;
        }
    }

    public function getItems()
    {
        return $this->items;
    }
}