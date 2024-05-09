<?php
include_once __DIR__ ."/Category.php";

class Product{
    public string $title;
    public float $price;
    public string $description;
    public string $img;
    public Category $category;

    public function __construct($category, $title, $price, $description, $img){
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->img = $img;
        $this->category = $category;
    }
}