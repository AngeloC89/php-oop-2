<?php
include_once __DIR__ . "/product.php";

class Meal extends Product
{
    public $name;

    public function __construct($name, $title, $price, $description, $img, $category)
    {
        parent::__construct($title, $price, $description, $img, $category);
        $this->name = $name;
    }
}