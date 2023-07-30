<?php

namespace iseeyoucopy\phpmvc\models;


use iseeyoucopy\phpmvc\Model;

class Admin extends Model
{
    // Add methods to fetch, update, and manage data related to admin operations (e.g., products).

    public function getAllProducts()
    {
        // Example method to fetch all products from the database (you would need to implement the database handling).
        // For demonstration purposes, we'll return mock data.
        return [
            ['id' => 1, 'name' => 'Product 1', 'price' => 10.99, 'description' => 'This is product 1.'],
            ['id' => 2, 'name' => 'Product 2', 'price' => 15.49, 'description' => 'This is product 2.'],
            // Add more products as needed.
        ];
    }


    // Add more methods for CRUD operations (create, update, delete) on products and other admin-related data.
}