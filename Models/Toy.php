<?php
include_once __DIR__ ."/product.php";

class Toy extends Product
{
    public $materiale;

    public function __construct($materiale,$title, $price, $description, $img, $category)
    {
        $this->materiale = $materiale;
        parent::__construct($title, $price, $description, $img, $category);
    }
}