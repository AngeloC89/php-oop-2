<?php
include_once __DIR__ ."/Category.php";

class Product{
    public $title;
    public $price;
    public $description;
    public $img;
    public Category $category;

    public function __construct($title, $price, $description, $img, $category){
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->img = $img;
        $this->category = $category;
    }
}