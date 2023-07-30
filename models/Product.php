<?php

namespace iseeyoucopy\phpmvc\models;

use iseeyoucopy\phpmvc\ProductModel;

class Product extends ProductModel
{

    public int $id = 0;
    public string $name = '';
    public string $description = '';
    public float $price = 0;
    public string $category = '';
    public string $added_by = '';

    public static function tableName(): string
    {
        return 'products';
    }

    public function attributes(): array
    {
        return ['name', 'description', 'price', 'category'];
    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'description' => [self::RULE_REQUIRED],
            'price' => [self::RULE_REQUIRED],
            'category' => [self::RULE_REQUIRED],
            'added_by' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'category' => 'Category',
            'added_by' => 'Added By',
        ];
    }

    public function productResults(): string
    {
        return $this->name . $this->description . $this->price . $this->category . $this->added_by;
    }

}