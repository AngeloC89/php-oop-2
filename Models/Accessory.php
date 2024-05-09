<?php
include_once __DIR__ . "/product.php";

class Meal extends Product
{
    public $scadenza;

    public function __construct($scadenza, $title, $price, $description, $img, $category)
    {
        parent::__construct($title, $price, $description, $img, $category);
        $this->scadenza = $scadenza;
    }
}