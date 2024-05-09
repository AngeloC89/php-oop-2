<?php
include_once __DIR__ ."/product.php";

class Meal extends Product
{
    public $scadenza;

    public function __construct($category,$scadenza,$title, $price, $description, $img )
    {
        parent::__construct($category,$title, $price, $description, $img, );
        $this->scadenza = $scadenza;
    }
    public static function fetchMeal(){
        $data = file_get_contents(__DIR__ ."/meal_db.json");
        $dataphp = json_decode($data,true);
        $meal = [];
        
        foreach ($dataphp as $key => $value) {
            $meal[] = new Meal( $value, $value['scadenza'], $value['title'], $value['price'], $value['description'], $value['img']);
        }
        return $meal;
    }
}